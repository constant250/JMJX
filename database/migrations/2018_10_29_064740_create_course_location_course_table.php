<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseLocationCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('course_state_identifier', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsigned()->index();
            $table->integer('state_identifier_id')->unsigned()->index();
            $table->double('os_tuition_individual', 15 ,2);
            $table->double('os_tuition_package', 15 ,2);
            $table->double('ofs_tuition_individual', 15 ,2);
            $table->double('ofs_tuition_package', 15 ,2);
            $table->integer('material_fee');
            $table->integer('enrolment_fee');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('state_identifier_id')->references('id')->on('state_identifier')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_location_course');
    }
}
