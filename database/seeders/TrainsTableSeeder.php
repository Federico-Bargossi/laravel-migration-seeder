<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;


use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void 
    {
        for($i = 0; $i < 10; $i++) {
            $newTrain = new Train();

            $newTrain->azienda = $faker->company;
            $newTrain->stazione_partenza = $faker->city;
            $newTrain->stazione_arrivo = $faker->city;
            $newTrain->orario_partenza = $faker->dateTime;
            $newTrain->orario_arrivo = $faker->dateTime;
            $newTrain->codice_treno = $faker->bothify('??-####');
            $newTrain->totale_carrozze = $faker->numberBetween(5, 20);
            $newTrain->in_orario = $faker->boolean;
            $newTrain->cancellato = $faker->boolean;

            $newTrain->save();
        }
    }
}
