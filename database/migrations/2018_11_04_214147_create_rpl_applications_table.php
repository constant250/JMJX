<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRplApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rpl_applications', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('course_code')->index();
            $table->integer('student_id')->unsigned();
            $table->boolean('current_employment');
            $table->boolean('if_yes')->nullable();
            $table->string('employers_name')->nullable();
            $table->boolean('if_no_question_one')->nullable();
            $table->text('details_of_workplace')->nullable();
            $table->boolean('undertaken_any_qualification');
            $table->string('if_yes_training_completion')->nullable();
            $table->string('country');
            $table->string('course_intitution');   
            $table->boolean('current_detailed_cv')->default(0);         
            $table->boolean('copies_of_cert')->default(0);         
            $table->boolean('current_and_prev_position')->default(0);         
            $table->boolean('copies_of_qualification')->default(0);         
            $table->boolean('letter_of_support')->default(0);
            $table->boolean('contact_details')->default(0);         
            $table->boolean('qualification_summary')->default(0);
            $table->string('self_assesment_checklist');         
            $table->string('how_many_units');         
            $table->string('candidate_signature');         
            $table->date('date_received');         
            $table->string('printed_name');         
            // $table->foreign('course_code')->references('code')->on('courses')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
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
        Schema::dropIfExists('rpl_applications');
    }
}
