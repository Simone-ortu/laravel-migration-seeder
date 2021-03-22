<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Dress;

class dressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newDress = new Dress();
            $newDress->name = $faker->name();
            $newDress->color = $faker->colorName();
            $newDress->taglia = $faker->numberBetween(32, 45);


        }
    }
}
