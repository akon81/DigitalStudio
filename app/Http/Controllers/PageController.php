<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PageController extends Controller
{
    public function show(string $slug)
    {
        $page = Page::getActiveBySlug($slug);

        if (! $page) {
            abort(404, 'Strona nie została jeszcze opublikowana.');
        }

        return view('page', compact('page'));
    }
}
