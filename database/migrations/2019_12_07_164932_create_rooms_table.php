<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hotel_id');
            $table->string('bed_count');
            $table->string('price');
            $table->boolean('mize_tahrir')->default(false);
            $table->boolean('abajur')->default(false);
            $table->boolean('chayisaz')->default(false);
            $table->boolean('ab_reyegan')->default(false);
            $table->boolean('rakht_aviz')->default(false);
            $table->boolean('room_service')->default(false);
            $table->boolean('sobhane')->default(false);
            $table->boolean('yakhchal')->default(false);
            $table->boolean('mobleman')->default(false);
            $table->boolean('komod_lebas')->default(false);
            $table->boolean('telefon')->default(false);
            $table->boolean('tv')->default(false);
            $table->boolean('sandoq_amanat')->default(false);
            $table->boolean('system_elam_hariq')->default(false);
            $table->boolean('system_tahvie')->default(false);
            $table->boolean('wifi')->default(false);
            $table->boolean('hamam')->default(false);
            $table->boolean('lavazem_behdashti')->default(false);
            $table->boolean('dampayi')->default(false);
            $table->boolean('wc_faranfi')->default(false);
            $table->timestamps();

            $table->foreign('hotel_id')->references('id')->on('hotels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
