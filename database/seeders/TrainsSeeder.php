<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // $table->id();
        //     $table->string('company', 50);
        //     $table->string('departure_station', 100);
        //     $table->string('arrival_station', 100);
        //     $table->dateTime('departure_time');
        //     $table->dateTime('arrival_time');
        //     $table->string('train_code', 20);
        //     $table->tinyInteger('cars_number')->default(2);
        //     $table->boolean('on_time')->default(false);
        //     $table->boolean('is_cancelled')->default(false);
        //     $table->timestamps();

        for ($i = 0; $i < 50; $i++) {
            $train = new Train();


            //dati da inserire
            $train->company = $faker->company();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $train->arrival_time = $faker->dateTimeBetween('-1 week', '+1 week');;
            $train->train_code = $faker->bothify('??###');
            $train->cars_number = $faker->numberBetween(2, 30);
            $train->on_time = $faker->boolean();
            $train->is_deleted = $faker->boolean();


            $train->save();
        }

        // $train->company = 'treniseeder';
        // $train->departure_station = 'Parma';
        // $train->arrival_station = 'Modena';
        // $train->departure_time = '2024-08-12 12:30:00';
        // $train->arrival_time = '2024-08-12 13:00:00';
        // $train->train_code = 'PM030';
        // $train->cars_number = 9;
        // $train->on_time = 1;
        // $train->is_deleted = 0;
    }
}
