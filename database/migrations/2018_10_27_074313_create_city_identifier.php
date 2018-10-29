<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityIdentifier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_identifier', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('state_id')->unsigned()->index()->nullable(false);
            $table->foreign('state_id')->references('id')->on('state_identifier')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->string('state_key',10)->default(NULL);
            $table->string('city',50)->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city_identifier');
    }
}
