<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use App\Services\ProjectService;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct(
        protected ProjectService $projectService
    ) {}

    public function index()
    {
        $projects = Project::with(['category', 'techStacks', 'media'])
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->get();

        $projects = $this->projectService->addTruncatedFields($projects);

        $categories = Category::orderBy('name')->get();

        return view('portfolio', compact('projects', 'categories'));
    }
}
