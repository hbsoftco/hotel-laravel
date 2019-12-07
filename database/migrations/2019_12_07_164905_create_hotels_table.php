<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('description');
            $table->string('star');
            $table->string('room_count');
            $table->string('img');
            $table->string('number_of_floors');
            $table->string('number_of_beds');
            $table->string('labi_capacity');
            $table->string('production_date');
            $table->boolean('parking');
            $table->boolean('restaurant');
            $table->boolean('free_wifi');
            $table->boolean('pool');
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
        Schema::dropIfExists('hotels');
    }
}
