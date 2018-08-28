<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         $this->call(AuthorTableSeeder::class);
         $this->call(PublisherTableSeeder::class);
         $this->call(MemberTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(BookTableSeeder::class);

         // $this->call(AuthorBookTableSeeder::class);
    }
}
