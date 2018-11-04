<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParallelEnrlmentVerificationForm extends Model
{
    //
    protected $table = 'parrallel_enrolment_verification_form';


   	public function student(){
   		return $this->belongsTo(Student::class);
   	}
}
