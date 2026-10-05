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
        $departure_time = fake()->time('H:i');
        $arrival_time = date('H:i', strtotime($departure_time) + fake()->numberBetween(30, 300) * 60);

        return [
            'company' => fake()->randomElement(['Trenitalia', 'Italo', 'Trenord', 'Frecciarossa']),
            'departure_station' => fake()->city(),
            'arrival_station' => fake()->city(),
            'departure_date' => fake()->dateTimeBetween('-3 days', '+7 days')->format('Y-m-d'),
            'departure_time' => $departure_time,
            'arrival_time' => $arrival_time,
            'train_code' => fake()->unique()->bothify('??####'),
            'carriage_count' => fake()->numberBetween(4, 10),
            'on_time' => fake()->boolean(80),
            'canceled' => fake()->boolean(10),
        ];
    }
}
