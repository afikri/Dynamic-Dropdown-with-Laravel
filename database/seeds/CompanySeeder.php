<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker\Factory::create();
      	foreach(range(1,70) as $index){
        	DB::table('companies')->insert([
            'city_id' => rand(1,7),
            'company' => $faker->company,

        ]);
      }
    }
}
