<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('rentals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userID');
            $table->integer('movieID');
            $table->integer('kisokID');
            $table->string('format,8');
            $table->dateTime('rentalDate');
            $table->dateTime('returnDate')->nullable();
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
        Schema::dropIfExists('rentals');
    }
}
