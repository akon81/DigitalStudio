<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Services\ProjectService;
use App\Settings\GeneralSettings;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __construct(
        protected ProjectService $projectService,
        protected GeneralSettings $settings
    ) {}

    /**
     * Display the homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $limit = $this->settings->homepage_projects_count > 0
            ? $this->settings->homepage_projects_count
            : 3;

        // Cache projects for 1 hour (3600 seconds)
        $projects = Cache::remember('homepage.projects.'.$limit, 3600, function () use ($limit) {
            $projects = Project::with(['category', 'techStacks', 'media'])
                ->whereNotNull('published_at')
                ->orderByDesc('published_at')
                ->take($limit)
                ->get();

            return $this->projectService->addTruncatedFields($projects);
        });

        // Cache categories for 1 hour
        $categories = Cache::remember('categories.all', 3600, function () {
            return Category::orderBy('name')->get();
        });

        return view('home', compact('projects', 'categories'));
    }
}
