<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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

        return view('home', compact('projects'));
    }
}
