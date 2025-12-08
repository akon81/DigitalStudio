<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = 'admin@digitalstudio.com.pl';

        $user = User::where('email', $email)->first();

        if ($user) {
            $user->update(['is_admin' => true]);
            $this->command->info("Marked existing user {$email} as admin.");
            return;
        }

        User::create([
            'name' => 'Administrator',
            'email' => $email,
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);

        $this->command->info("Created admin user {$email} with password 'password'. Please change it.");
    }
}
