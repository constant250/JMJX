<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostcodesGeo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postcodes_geo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('postcode',4);
            $table->string('suburb',100)->key();
            $table->string('state',4)->index();
            $table->foreign('state')->references('state_key')->on('state_identifier')->onDelete('cascade');
            $table->decimal('latitude',6,3);
            $table->decimal('longitude',6,3);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postcodes_geo');
    }
}
