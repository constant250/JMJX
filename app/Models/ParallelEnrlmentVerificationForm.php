<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParallelEnrlmentVerificationForm extends Model
{
    //
    protected $table = 'parrallel_enrolment_verification_form';

    protected $fillable = [
    				'student_id',
    				'name_of_training_prov',
    				'studentid',
                    'course_code',
                    'course_start_date',
                    'course_end_date',
                    'timetable_days',
                    'timetable_start_time',
                    'timetable_finish_time',
                    'contact_name',
                    'contact_position',
                    'confirm_course_of_enrolment',
                    'confirm_course_start_and_end_dates',
                    'confirm_timetable_details',
                    'signed',
                    'date_received',
                    'created_at',
                ];

   	public function student(){
   		return $this->belongsTo(Student::class);
   	}
}
