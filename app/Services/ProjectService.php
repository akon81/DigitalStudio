<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Collection;

class ProjectService
{
    /**
     * Add truncated excerpt and description to projects collection.
     *
     * @param \Illuminate\Database\Eloquent\Collection $projects
     * @param int $excerptWords
     * @param int $descriptionWords
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function addTruncatedFields(Collection $projects, int $excerptWords = 10, int $descriptionWords = 35): Collection
    {
        return $projects->map(function ($project) use ($excerptWords, $descriptionWords) {
            $project->truncated_excerpt = Str::words($project->excerpt, $excerptWords, '...');
            $project->truncated_description = Str::words(strip_tags($project->description), $descriptionWords, '...');
            
            return $project;
        });
    }
}
