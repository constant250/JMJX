<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->string('course_code')->index();
            $table->integer('student_type_id')->unsigned();
            $table->integer('training_location_id')->unsigned();
            $table->timestamps('course_start_date');
            $table->foreign('student_type_id')->references('id')->on('student_types')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('course_code')->references('code')->on('courses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('training_location_id')->references('id')->on('state_identifier')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_details');
    }
}
