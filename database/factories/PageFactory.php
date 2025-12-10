<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => $this->faker->unique()->slug(2),
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraphs(10, true),
            'is_active' => false,
        ];
    }

    public function active(): static
    {
        return $this->state(fn (array $attributes) => [
            'is_active' => true,
        ]);
    }

    public function privacyPolicy(): static
    {
        return $this->state(fn (array $attributes) => [
            'slug' => 'privacy-policy',
            'title' => 'Polityka prywatności',
        ]);
    }

    public function termsOfService(): static
    {
        return $this->state(fn (array $attributes) => [
            'slug' => 'terms-of-service',
            'title' => 'Regulamin',
        ]);
    }
}
