<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreTrainingReview extends Model
{
    //

    protected $table = 'pre_training_review';

    protected $fillable = [
    	'training_program',
    	'date_of_review',
    	'aspiration_interest',
    	'course_code',
    	'learning_strategies_materials',
    	'issues_challenge_barriers',
    	'barrier_if_yes_specify',
    	'familiar_acsf',
    	'score_required_acsf',
    	'study_reason_options_value',
    	'eti_support_service',
    	'prevent_processing_training',
    	'prevent_pt_if_yes_specify',
    	'aware_outcome_course',
    	'skill_required_to_work',
    	'credit_transfer_recognition_prior_learning',
    	'education_attainment',
    	'if_yes_education_attainment',
    	'current_working_industry_training',
    	'position_title',
    	'learning_styles',
    	'additional_support_to_complete',
    	'eligible_for_goverment_funding',
    	'required_to_participate_in_ncver_or_funding_department_survey',
    	'aware_of_any_fee_including_refun_policy',
    	'aware_complaints_appeals_policy',
    	'aware_course_attendance_requirements',
    	'not_eligible_for_funding',
    	'student_signature',
    	'date_received',
    	'assesment_req_career_objective_and_aspiration',
    	'assesment_req_attendance_req_training_assesment_training_req',
    	'assesment_req_rights_obligation_funding_training_place',
    	'assesment_req_identified_support_identified_during_process',
    	'assesment_req_student_learning_style',
    	'assesment_req_carrer_history_experience_future_goals_objective',
    	'assesment_req_rpl_ct_arrangement_application_process',
    	'authorized_person_subject_lln_funding_eligibility_criteria',
    	'authorized_person_declaration_comments',
    	'authorized_person_name',
    	'authorized_person_signature',
    	'authorized_person_position',
    	'authorized_person_date_received',
    ];

    public function student(){
    	return $this->belongsTo(Student::class);
    }
}
