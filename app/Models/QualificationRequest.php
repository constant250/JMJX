<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QualificationRequest extends Model
{
    //
    protected $table = 'qualification_request_form';

    public function student(){
    	return $this->belongsTo(Student::class);
    }
}
