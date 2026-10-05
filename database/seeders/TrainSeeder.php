<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Milano Centrale',
                'arrival_station' => 'Roma Termini',
                'departure_time' => '08:00',
                'arrival_time' => '11:10',
                'train_code' => 'FR9515',
                'carriage_count' => 8,
                'on_time' => true,
                'canceled' => false,
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Torino Porta Nuova',
                'arrival_station' => 'Napoli Centrale',
                'departure_time' => '09:25',
                'arrival_time' => '15:05',
                'train_code' => 'IT9921',
                'carriage_count' => 11,
                'on_time' => false,
                'canceled' => false,
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Milano Cadorna',
                'arrival_station' => 'Como Lago',
                'departure_time' => '12:15',
                'arrival_time' => '13:20',
                'train_code' => 'RE1630',
                'carriage_count' => 5,
                'on_time' => true,
                'canceled' => true,
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Verona Porta Nuova',
                'arrival_station' => 'Venezia Santa Lucia',
                'departure_time' => '17:40',
                'arrival_time' => '19:05',
                'train_code' => 'RV2228',
                'carriage_count' => 6,
                'on_time' => true,
                'canceled' => false,
            ],
        ];

        foreach ($trains as $train) {
            $new_train = new Train();

            $new_train->fill($train);
            // I treni dell'array partono tutti oggi
            $new_train->departure_date = date('Y-m-d');

            $new_train->save();
        }
    }
}
