<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Category;
use App\Models\Project;
use App\Services\ProjectService;
use App\Settings\GeneralSettings;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class HomePortfolio extends Component
{
    public ?int $activeCategoryId = null;

    public int $limit;

    public function mount(): void
    {
        $settings = app(GeneralSettings::class);

        $this->limit = $settings->homepage_projects_count > 0
            ? $settings->homepage_projects_count
            : 3;
    }

    public function setCategory(?int $categoryId = null): void
    {
        $this->activeCategoryId = $categoryId;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategoriesProperty(): Collection
    {
        return Cache::remember('categories.active', 3600, function () {
            return Category::query()
                ->where('is_active', true)
                ->orderBy('order')
                ->get();
        });
    }

    /**
     * @return Collection<int, Project>
     */
    public function getProjectsProperty(): Collection
    {
        $query = Project::query()
            ->with(['category', 'techStacks', 'media'])
            ->whereNotNull('published_at')
            ->orderByDesc('published_at');

        if ($this->activeCategoryId) {
            $query->where('category_id', $this->activeCategoryId);
        }

        $query->take($this->limit);

        $projects = $query->get();

        return app(ProjectService::class)->addTruncatedFields($projects);
    }

    public function render()
    {
        return view('livewire.home-portfolio');
    }
}
