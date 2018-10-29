<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    public function locations(){
    	return $this->belongsToMany(CourseLocation::class)->withPivot('course_location_id');
    }
}
