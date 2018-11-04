<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentFeedback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->string('course_code')->index();
            $table->string('instructor_name');
            $table->text('suggestion');
            $table->text('like_to_change_about_the_course');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('course_code')->references('code')->on('courses')->onDelete('cascade');
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
        Schema::dropIfExists('student_feedback');
    }
}
