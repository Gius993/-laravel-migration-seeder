<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 4; $i++){
            //nuova riga
            $new_trip = new Trip();
            //popolo la riga
            $new_trip->locality = $faker->city();
            $new_trip->description = 'è un posto molto bello';
             //salvo la riga
             $new_trip->save();
        }
    }
}
