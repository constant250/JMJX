<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentQualificationRequest extends Model
{
    //
    protected $table = 'student_qualification_request';

    public function student(){
    	return $this->belongsTo(Student::class);
    }
}
