<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Project extends Model implements HasMedia
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'description',
        'url',
        'category_id',
        'published_at',
        'is_case_study',
        'case_study_goal',
        'case_study_process',
        'case_study_result',
        'case_study_subtitle',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_case_study' => 'boolean',
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function techStacks()
    {
        return $this->belongsToMany(TechStack::class, 'project_tech_stack');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')
            ->useDisk('public_images');

        $this->addMediaCollection('case_study')
            ->useDisk('public_images');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->fit(Fit::Crop, 600, 400)
            ->nonQueued();
    }
}
