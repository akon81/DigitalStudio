<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::with(['category', 'techStacks', 'media'])
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->get();

        $categories = Category::orderBy('name')->get();

        return view('portfolio', compact('projects', 'categories'));
    }
}
