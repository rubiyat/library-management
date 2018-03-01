<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Admin";
        $user->email = "admin@admin.com";
        $user->password = bcrypt('123456');
        $user->save();

        $user = new User();
        $user->name = "Hasan Ali";
        $user->email = "hasan@dev.com";
        $user->password = bcrypt('123456');
        $user->save();

        $user = new User();
        $user->name = "User";
        $user->email = "a@b.c";
        $user->password = bcrypt('123456');
        $user->save();
        echo "User Seeded Successfully.\n";
        echo "User Name: admin@admin.com\n";
        echo "Password: 123456\n";
    }

}