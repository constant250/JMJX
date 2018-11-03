<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParrallelEnrolmentVerificationForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parrallel_enrolment_verification_form', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->string('name_of_training_prov');
            $table->string('studentid');
            $table->string('course_code')->index();
            $table->foreign('course_code')->references('code')->on('courses')->onDelete('cascade');
            $table->datetime('course_start_date');
            $table->datetime('course_end_date');
            $table->integer('timetable_days');
            $table->time('timetable_start_time');
            $table->time('timetable_finish_time');
            $table->string('contact_name');
            $table->string('contact_position');
            $table->boolean('confirm_course_of_enrolment');
            $table->boolean('confirm_course_start_and_end_dates');
            $table->boolean('confirm_timetable_details');
            $table->string('signed');
            $table->datetime('date_received');
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
        Schema::dropIfExists('parrallel_enrolment_verification_form');
    }
}
