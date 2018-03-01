<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorTableSeeder extends Seeder
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
            $author = new Author();
            $author->name = $faker -> name;
            $author->save();
            echo(' .');
        }
        echo "Author Seeded Successfully.\n";
    }
}
