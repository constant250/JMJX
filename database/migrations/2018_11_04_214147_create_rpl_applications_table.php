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
            $table->string('course_code')->index();
            $table->integer('student_id')->unsigned();
            $table->boolean('current_employment');
            $table->boolean('if_yes');
            $table->string('employers_name');
            $table->boolean('if_no_question_one');
            $table->text('details_of_workplace');
            $table->boolean('undertaken_any_qualification');
            $table->string('if_yes_training_completion');
            $table->string('country');
            $table->string('course_intitution');   
            $table->boolean('current_detailed_cv');         
            $table->boolean('copies_of_cert');         
            $table->boolean('current_and_prev_position');         
            $table->boolean('copies_of_qualification');         
            $table->boolean('letter_of_support');
            $table->boolean('contact_details');         
            $table->boolean('qualification_summary');
            $table->string('self_assesment_checklist');         
            $table->string('how_many_units');         
            $table->string('candidate_signature');         
            $table->date('date_received');         
            $table->string('printed_name');         
            $table->foreign('course_code')->references('code')->on('courses')->onDelete('cascade');
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
