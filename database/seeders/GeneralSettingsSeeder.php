<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Settings\GeneralSettings;

class GeneralSettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = new GeneralSettings([
            'email' => 'kontakt@digitalstudio.com.pl',
            'phone' => '+48 123 456 789',
            'facebook' => 'https://facebook.com/digitalstudio',
            'instagram' => 'https://instagram.com/digitalstudio',
            'homepage_projects_count' => 3,
        ]);
        $settings->save();
    }
}
