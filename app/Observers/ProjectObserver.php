<?php

namespace App\Observers;

use App\Models\Project;
use Illuminate\Support\Facades\Cache;

class ProjectObserver
{
    /**
     * Handle the Project "created" event.
     */
    public function created(Project $project): void
    {
        $this->clearProjectCache();
    }

    /**
     * Handle the Project "updated" event.
     */
    public function updated(Project $project): void
    {
        $this->clearProjectCache();
    }

    /**
     * Handle the Project "deleted" event.
     */
    public function deleted(Project $project): void
    {
        $this->clearProjectCache();
    }

    /**
     * Handle the Project "restored" event.
     */
    public function restored(Project $project): void
    {
        $this->clearProjectCache();
    }

    /**
     * Handle the Project "force deleted" event.
     */
    public function forceDeleted(Project $project): void
    {
        $this->clearProjectCache();
    }

    /**
     * Clear all project-related cache.
     */
    protected function clearProjectCache(): void
    {
        Cache::forget('portfolio.projects.all');

        // Clear homepage projects cache for different limits
        for ($i = 1; $i <= 10; $i++) {
            Cache::forget('homepage.projects.'.$i);
        }
    }
}
