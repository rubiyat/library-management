<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookSerialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_serials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id')->length(11)->unsigned();
            $table->integer('serial_no')->length(11)->unsigned();
            $table->boolean('is_active')->default(1);
            $table->timestamps();

            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');            
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_serials');
    }
}
