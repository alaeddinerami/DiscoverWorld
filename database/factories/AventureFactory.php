<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aventure>
 */
class AventureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'titelAventure'=>fake()->sentence,
            'descriptionsAventeur'=>fake()->paragraph,
            'conseils'=>fake()->paragraph,
            'distination_id'=>null
        ];
    }
}
