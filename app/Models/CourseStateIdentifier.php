<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseStateIdentifier extends Model
{
    //
	protected $table = 'course_state_identifier';


	public function state()
	{
		return $this->belongsTo(StateIdentifier::class, 'state_identifier_id');
	}

    // public function locations(){
    // 	return $this->belongsToMany(CourseLocation::class)->withPivot('course_location_id');
    // }
}
