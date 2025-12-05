<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Support\Facades\Cache;

class FaqController extends Controller
{
    /**
     * Display the FAQ page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Cache FAQs for 1 hour
        $faqs = Cache::remember('faqs.active', 3600, function () {
            return Faq::where('is_active', true)
                ->orderBy('order')
                ->get();
        });

        return view('faq', compact('faqs'));
    }
}
