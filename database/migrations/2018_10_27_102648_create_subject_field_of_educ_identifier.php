<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectFieldOfEducIdentifier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_field_of_educ_identifier', function (Blueprint $table) {
            $table->increments('id');
            $table->string('value',10)->nullable(false);
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
        Schema::dropIfExists('subject_field_of_educ_identifier');
    }
}
