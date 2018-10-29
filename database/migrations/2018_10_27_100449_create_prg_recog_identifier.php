<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrgRecogIdentifier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prg_recog_identifier', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('value')->unique()->nullable(false);
            $table->string('description',150)->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prg_recog_identifier');
    }
}
