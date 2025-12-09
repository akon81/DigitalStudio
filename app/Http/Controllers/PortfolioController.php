<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Services\ProjectService;
use Illuminate\Support\Facades\Cache;

class PortfolioController extends Controller
{
    public function __construct(
        protected ProjectService $projectService
    ) {}

    public function index()
    {
        // Cache all projects for 1 hour
        $projects = Cache::remember('portfolio.projects.all', 3600, function () {
            $projects = Project::with(['category', 'techStacks', 'media'])
                ->whereNotNull('published_at')
                ->orderByDesc('published_at')
                ->get();

            return $this->projectService->addTruncatedFields($projects);
        });

        // Cache categories for 1 hour
        $categories = Cache::remember('categories.active', 3600, function () {
            return Category::where('is_active', true)
                ->orderBy('order')
                ->get();
        });

        return view('portfolio', compact('projects', 'categories'));
    }
}
