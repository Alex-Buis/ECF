<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matela>
 */
class MatelaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
        public function definition(): array
        {
            return [
                'title' => fake()->sentence(3),
                'marque'=> fake()->text(),
                'longueur'=> fake()->numberBetween(100,200),
                'cover'=> fake()->imageUrl(),
                'largeur'=> fake()->numberBetween(100,200),
                'prix'=> fake ()->numberBetween(750,1500),
                'discount' => fake()->numberBetween(10,90),
            ];
        }
    }

