<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('publisher_id', 11);
            $table->string('name', 150);
            $table->float('price', 8, 2);
            $table->string('isbn', 50);
            $table->string('rack_no', 50)->nullable();
            $table->string('image', 150)->nullable();
            $table->boolean('is_active')->default(1);
            $table->timestamps();

            $table->foreign('publisher_id')->references('id')->on('publishers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
