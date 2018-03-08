<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->text('address')->nullable();
            $table->string('phone_number',100);
            $table->string('email',100)->unique();
            $table->boolean('gender')->default(0);;
            $table->date('date_of_birth');
            $table->date('membership_date');
            $table->float('membership_fees', 8, 2);
            $table->string('occupation',150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
