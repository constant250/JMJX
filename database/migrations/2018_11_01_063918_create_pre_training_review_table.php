<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreTrainingReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_training_review', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->string('training_program');
            $table->datetime('date_of_review');
            $table->text('aspiration_interest');
            $table->string('course_code');
            $table->boolean('learning_strategies_materials');
            $table->boolean('issues_challenge_barriers');
            $table->string('barrier_if_yes_specify')->nullable();
            $table->boolean('familiar_acsf');
            $table->boolean('score_required_acsf');
            $table->string('study_reason_options_value');
            $table->string('eti_support_service');
            $table->boolean('prevent_processing_training');
            $table->string('prevent_pt_if_yes_specify')->nullable();
            $table->boolean('aware_outcome_course');
            $table->boolean('skill_required_to_work');
            $table->boolean('credit_transfer_recognition_prior_learning');
            $table->boolean('education_attainment');
            $table->string('if_yes_education_attainment')->nullable();
            $table->boolean('current_working_industry_training');
            $table->string('position_title')->nullable();

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
        Schema::dropIfExists('pre_training_review');
    }
}
