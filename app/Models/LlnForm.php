<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LlnForm extends Model
{
	// 
    protected $fillable = [
		'years_in_au',
		'language_you_speak',
		'training_goals',
		'self_reflection',
		'assessor_notes',
		'task_1_q_1',
		'task_1_q_2',
		'task_1_q_3',
		'task_2_q_1',
		'task_2_q_2',
		'task_2_q_3',
		'task_2_q_4',
		'task_2_q_5',
		'task_2_q_6',
		'task_2_q_7',
		'task_2_q_8',
		'assessed_by',
		'date_assessed',
		'assessment_summary',
		'lln_outcome',
		'lln_outcome_notes',
		'assessor_name',
		'assessor_signature',
		'assessor_signature_date'
	];

	public function person()
	{
		return $this->belongsTo(Persons::class, 'person_id');
	}
}
