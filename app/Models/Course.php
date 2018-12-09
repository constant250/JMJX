<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    // public function locations(){
    // 	return $this->belongsToMany(CourseLocation::class)->withPivot('course_location_id');
    // }

    public function course_state_id()
    {
    	return $this->hasMany(CourseStateIdentifier::class, 'course_id', 'id');
    }

    public function refund(){
    	return $this->hasOne(RefundRequest::class);
    }

    public function feedback(){
    	return $this->hasOne(StudentFeedback::class);
    }
}
