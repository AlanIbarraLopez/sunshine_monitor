<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Temperatures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temperatures', function (Blueprint $table) {
            $table->increments('temp_id');
            $table->dateTime('date_registro')->nullable();
            $table->float('temp')->nullable();
            $table->string('log',1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temperatures');
    }
}
