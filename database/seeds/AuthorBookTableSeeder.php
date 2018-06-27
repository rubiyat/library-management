<?php

use Illuminate\Database\Seeder;
use App\Author;
use App\AuthorBook;

class AuthorBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 300; $i++){
        	$author = Author::find(rand(1,100));
        	AuthorBook::create([
        		'book_id' => $i,
        		'author_id' => $author->id,
        	]);
            echo(' .');
        }
        echo "Author Books Seeded Successfully.\n";
    }
}
