<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGastenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gasten', function (Blueprint $table) {
            $table->id();
            $table->string('voornaam');
            $table->string('achternaam');
            $table->string('adres');
            $table->string('postcode');
            $table->string('plaats');
            $table->string('email');
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
