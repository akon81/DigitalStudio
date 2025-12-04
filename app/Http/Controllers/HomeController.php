<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Services\ProjectService;
use App\Settings\GeneralSettings;
use Illuminate\Http\Request;

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

        $projects = Project::with(['category', 'techStacks', 'media'])
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->take($limit)
            ->get();

        $projects = $this->projectService->addTruncatedFields($projects);

        $categories = Category::orderBy('name')->get();

        return view('home', compact('projects', 'categories'));
    }
}
