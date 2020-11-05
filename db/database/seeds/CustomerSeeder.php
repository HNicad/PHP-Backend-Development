<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        for($i = 0; $i < 20; $i++){
            DB::table('customers')->insert([
                'name' => $faker->name,
                'city' => $faker->city,
                'age' => $faker->numberBetween(18,70)
            ]);
        }
    }
}
