<?php

use Illuminate\Database\Seeder;
use App\Publisher;
use App\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i = 1; $i <= 300; $i++){
        	$publisher = Publisher::find(rand(1,100));
        	$publisher->books()->create([
        		'name' => $faker->name,
        		'price' => $faker->randomFloat(2, 100, 1000),
        		'isbn' => $faker->isbn13,
                'is_active' => rand(0,1),
        		'image' => 'images/books/default.jpg',
        	]);
            echo(' .');
        }
        echo "Books Seeded Successfully.\n";
    }
}