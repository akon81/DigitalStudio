<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Project;
use App\Observers\CategoryObserver;
use App\Observers\FaqObserver;
use App\Observers\ProjectObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register model observers for cache invalidation
        Project::observe(ProjectObserver::class);
        Category::observe(CategoryObserver::class);
        Faq::observe(FaqObserver::class);
    }
}
