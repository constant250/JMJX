<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecificFunding extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specific_funding', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identifier',2)->nullable(false);
            $table->string('full_name',20)->nullable(false);
            $table->string('description',100)->nullable(false);
            $table->datetime('last_update')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specific_funding');
    }
}
