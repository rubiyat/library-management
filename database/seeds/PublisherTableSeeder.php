<?php

use Illuminate\Database\Seeder;
use App\Publisher;

class PublisherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i = 1; $i <= 100; $i++){
            $publisher = new Publisher();
            $publisher->name = $faker -> name;
            $publisher->address = $faker -> address;
            $publisher->phone_number = '01'.rand(500000000,999999999);
            $publisher->email = $faker -> email;
            $publisher->save();
            echo(' .');
        }
        echo "Publisher Seeded Successfully.\n";
    }
}
