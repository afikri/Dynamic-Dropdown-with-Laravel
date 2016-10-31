<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
      	foreach(range(1,7) as $index){
        	DB::table('cities')->insert(['city' => $faker->city,]);
      	}
    }
}
