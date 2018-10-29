<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostcodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postcodes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('postcode',4)->nullable(false);
            $table->string('suburb',40)->nullable(false);
            $table->string('state',3)->nullable(false);
            $table->string('dc',40)->default(NULL);
            $table->string('type',40)->nullable(false);
            $table->integer('lat')->nullable(false);
            $table->integer('lon')->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postcodes');
    }
}
