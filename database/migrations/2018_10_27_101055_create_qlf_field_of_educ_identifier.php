<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQlfFieldOfEducIdentifier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qlf_field_of_educ_identifier', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('value')->nullable(false);
            $table->string('description',100)->unique('idx_desc')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qlf_field_of_educ_identifier');
    }
}
