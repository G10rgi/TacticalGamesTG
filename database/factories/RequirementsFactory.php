<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Requirements>
 */
class RequirementsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'os' => 'Windows',
            'ram' => '16GB',
            'gpu' => 'Nvidia',
            'cpu' => 'Intel',
        ];
    }
}
