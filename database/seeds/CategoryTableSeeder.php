<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
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
            $category = new Category();
            $category->name = $faker -> name;
            $category->is_active = rand ( 0 , 1 );
            $category->save();
            echo(' .');
        }
        echo "Category Seeded Successfully.\n";
    }
}
