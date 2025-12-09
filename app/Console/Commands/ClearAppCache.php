<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class ClearAppCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:clear-app';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear all application-specific cache (projects, categories, FAQs)';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Clearing application cache...');

        // Clear all project cache
        Cache::forget('portfolio.projects.all');
        for ($i = 1; $i <= 10; $i++) {
            Cache::forget('homepage.projects.'.$i);
        }

        // Clear categories cache
        Cache::forget('categories.all');
        Cache::forget('categories.active');

        // Clear FAQs cache
        Cache::forget('faqs.active');

        $this->info('✓ Application cache cleared successfully!');

        return Command::SUCCESS;
    }
}
