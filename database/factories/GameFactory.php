<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake('ka_GE')->realText(20),
            'image' => fake()->imageUrl(),
            'description' => fake('ka_GE')->realText(200),
            'download_link' => fake()->url(),
            'additional_images' => [fake()->imageUrl(),fake()->imageUrl(),fake()->imageUrl],
            'background_image' => fake()->imageUrl(),
        ];
    }
}
