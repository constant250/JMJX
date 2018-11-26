<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RplApplication extends Model
{
    //

    protected $fillable = ['student_id','current_employment','if_yes','employers_name','if_no_question_one','details_of_workplace','undertaken_any_qualification','if_yes_training_completion','country','current_detailed_cv','copies_of_cert','current_and_prev_position','copies_of_qualification','copies_of_qualification','letter_of_support','contact_details','qualification_summary','self_assesment_checklist','how_many_units','candidate_signature','date_received','printed_name'];

    public function professional_references(){
    	return $this->hasMany(ProfessionalReference::class);
    }

    public function previous_employment_histories(){
    	return $this->hasMany(PreviousEmploymentHistory::class);
    }
}
