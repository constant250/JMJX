<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseLocation extends Model
{
    //
	public function courses(){
		return $this->belongsToMany(Course::class)->withPivot('course_id');
	}
}
