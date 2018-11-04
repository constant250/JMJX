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
            $table->string('learning_styles')->nullable();
            $table->string('additional_support_to_complete')->nullable();
            $table->string('eligible_for_goverment_funding');
            $table->string('required_to_participate_in_ncver_or_funding_department_survey');
            $table->string('aware_of_any_fee_including_refun_policy');
            $table->string('aware_complaints_appeals_policy');
            $table->string('aware_course_attendance_requirements');
            $table->string('not_eligible_for_funding');
            $table->string('student_signature');
            $table->datetime('date_received');
            $table->boolean('assesment_req_career_objective_and_aspiration');
            $table->boolean('assesment_req_attendance_req_training_assesment_training_req');
            $table->boolean('assesment_req_rights_obligation_funding_training_place');
            $table->boolean('assesment_req_identified_support_identified_during_process');
            $table->boolean('assesment_req_student_learning_style');
            $table->boolean('assesment_req_carrer_history_experience_future_goals_objective');
            $table->boolean('assesment_req_rpl_ct_arrangement_application_process');
            $table->boolean('authorized_person_subject_lln_funding_eligibility_criteria');
            $table->text('authorized_person_declaration_comments');
            $table->string('authorized_person_name');
            $table->string('authorized_person_signature');
            $table->string('authorized_person_position');
            $table->string('authorized_person_date_received');
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
