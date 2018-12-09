<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentFeedback extends Model
{
    //


    protected $table = 'student_feedback';

    protected $fillable = ['course_code', 'instructor_name','suggestion','like_to_change_about_the_course'];

    public function course(){
    	return $this->belongsTo(Course::class,'course_code','code');
    }

    public function student(){
    	return $this->belongsTo(Student::class);
    }

}
