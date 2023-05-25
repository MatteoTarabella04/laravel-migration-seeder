<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {

            $train = new Train();
            $train->company = $faker->randomElement(['Trenitalia', 'Italo']);
            $train->start_station = $faker->city();
            $train->arrive_station = $faker->city();
            $train->start_time = $faker->time();
            $train->arrive_time = $faker->time();
            $train->coaches_no = $faker->numberBetween(1, 9);
            $train->on_time = $faker->boolean();
            $train->cancelled = $faker->boolean();
            $train->save();
        }

    }
}