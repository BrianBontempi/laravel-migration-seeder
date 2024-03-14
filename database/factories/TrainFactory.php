<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Train;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company' => fake()->word(),
            'departure_station' => fake()->city(),
            'arrival_station' => fake()->city(),
            'departure_time' => fake()->time(),
            'arrival_time' => fake()->time(),
            'train_code' => fake()->unique()->word(),
            'carriage_count' => fake()->numberBetween(4, 10),
            'on_time' => fake()->boolean(80),
            'canceled' => fake()->boolean(10),
        ];
    }
}