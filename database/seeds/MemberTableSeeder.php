<?php

use Illuminate\Database\Seeder;
use App\Member;

class MemberTableSeeder extends Seeder
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
        $member = new Member();
        $member->name = $faker -> name;
        $member->address = $faker -> address;
        $member->phone_number = $faker -> phoneNumber;
        $member->email = $faker -> email;
        $member->gender = $faker -> boolean();
        $member->date_of_birth = $faker -> date();
        $member->membership_date = $faker -> date();
        $member->membership_fees = $faker -> randomFloat(2, 500, 1000);
        $member->occupation = $faker -> word;
        $member->save();
        echo(' .');
        }
        echo "Member Seeded Successfully.\n";
    }
}
