<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlaceFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->text(50),
            'latitude' => fake()->randomFloat(15, -90, 90),
            'longitude' => fake()->randomFloat(15, -180, 180),
        ];
    }
}
