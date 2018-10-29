<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('prefix',['Mr','Mrs','Ms']);
            $table->integer('person_type')->unsigned();
            // $table->foreign('person_type')->references('id')->on('person_types');
            $table->integer('party_id')->unsigned();
            // $table->foreign('party_id')->references('id')->on('party')->onDelete('cascade')->onUpdate('no action');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->date('dob');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person');
    }
}
