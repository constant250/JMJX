<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternationalStudentEnrolmentFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('international_student_enrolment_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->date('preferred_intake_month');
            $table->integer('party_id');
            $table->string('passsport_number');
            $table->date('expiry_date');
            $table->string('permanent_residency_or_current_australian_visa');
            $table->string('visa_type');
            $table->date('visa_expiry_date');
            $table->string('visa_type');
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_relationship')->nullable();
            $table->string('contact_person_email')->nullable();
            $table->string('contact_person_address')->nullable();
            $table->string('contact_person_mobile')->nullable();
            $table->string('contact_person_telephone')->nullable();
            $table->string('english_first_language', 5)->nullable();
            $table->string('english_no_first_language')->nullable();
            $table->string('english_secondary_level', 5)->nullable();
            $table->string('english_origin')->nullable();
            $table->string('english_language_score')->nullable();
            $table->integer('english_language_exam')->nullable()
            $table->integer('english_band_score')->nullable();
            $table->integer('english_test_data')->nullable();
            $table->integer('english_apply_language_course',5)->nullable();
            $table->text('list_down_previous_education')->nullable();
            $table->text('best_describe_current_employment')->nullable();
            $table->text('list_down_job_experiences')->nullable();
            $table->string('study_reason')->nullable();
            $table->text('essay_why_study_courses')->nullable();
            $table->text('essay_why_would_you_like_here')->nullable();
            $table->text('essay_course_benefit_your_career_path')->nullable();
            $table->text('essay_career_plan')->nullable();
            $table->string('have_usi', 5)->nullable();
            $table->string('usi')->nullable();
            $table->string('create_usi', 5)->nullable();
            $table->string('have_oshc', 5)->nullable();
            $table->string('oshc_type', 20)->nullable();
            $table->string('apply_for_rpl', 5)->nullable();
            $table->string('agent_company_name')->nullable();
            $table->string('agent_name')->nullable();
            $table->string('agent_contact_details')->nullable();
            $table->text('agent_comment')->nullable();
            $table->text('agent_signature')->nullable();
            $table->text('agent_signature_date')->nullable();
            $table->text('applicants_declaration')->nullable();
            $table->string('applicants_signature')->nullable();
            $table->date('applicants_signature_date')->nullable();
            $table->string('applicants_name')->nullable();
            $table->string('guardians_signature')->nullable();
            $table->date('guardians_signature_date')->nullable();
            $table->string('guardians_name')->nullable();
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
        Schema::dropIfExists('international_student_enrolment_forms');
    }
}
