<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
        $newTrain= new Train();
        $newTrain->company = $faker->word();
        $newTrain->departure_station = $faker->words(2, true);
        $newTrain->arrival_station = $faker->words(2, true);
        $newTrain->departure_time = $faker->time();
        $newTrain->arrival_time = $faker->time();
        $newTrain->code_train = $faker->randomNumber(5, false);
        $newTrain->carriage = $faker->numberBetween(1, 20);
        $newTrain->in_time = $faker->numberBetween(0, 1);
        $newTrain->deleted = $faker->numberBetween(0, 1);
        $newTrain->save();
        };
    }
}