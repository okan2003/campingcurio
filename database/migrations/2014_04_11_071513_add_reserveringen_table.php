<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddReserveringenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserveringen', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gasten_id')->references('id')->on('gasten');
            $table->foreignId('plaatsen_id')->references('id')->on('plaatsen');
            $table->date('datum_van');
            $table->date('datum_tot');
            $table->tinyInteger('auto');
            $table->tinyInteger('personen');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
