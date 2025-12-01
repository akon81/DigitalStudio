<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Services\ProjectService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(
        protected ProjectService $projectService
    ) {}

    /**
     * Display the homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projects = Project::with(['category', 'techStacks', 'media'])
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->take(3)
            ->get();

        $projects = $this->projectService->addTruncatedFields($projects);

        return view('home', compact('projects'));
    }
}
