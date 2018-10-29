<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrgLvlOfEducIdentifier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prg_lvl_of_educ_identifier', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('value')->nullable(false);
            $table->string('description',80)->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prg_lvl_of_educ_identifier');
    }
}
