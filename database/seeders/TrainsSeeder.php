<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
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

        $train = new Train();

        //dati da inserire
        $train->company = 'treniseeder';
        $train->departure_station = 'Parma';
        $train->arrival_station = 'Modena';
        $train->departure_time = '2024-08-12 12:30:00';
        $train->arrival_time = '2024-08-12 13:00:00';
        $train->train_code = 'PM030';
        $train->cars_number = 9;
        $train->on_time = 1;
        $train->is_cancelled = 0;


        $train->save();
    }
}
