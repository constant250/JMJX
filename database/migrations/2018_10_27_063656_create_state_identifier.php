<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStateIdentifier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state_identifier', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('value')->unsigned()->nullable(false);
            $table->string('state_code',2)->unique()->nullable(false);
            $table->string('state_key',4)->default(NULL)->index('state_key');
            $table->string('shortname',80)->nullable(false);
            $table->string('state_name',80)->unique()->nullable(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('state_identifier');
    }
}
