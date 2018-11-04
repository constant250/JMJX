<?php

namespace App\Models;

use Kodeine\Metable\Metable;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

	use Metable;

	protected $metaTable = 'students_meta';

    public function party(){
    	return $this->belongsTo(Party::class);
    }

    public function details(){
    	return $this->hasMany(StudentDetail::class);
    }

    public function parrallel_enrolment_verification_form(){
    	return $this->hasOne(ParallelEnrlmentVerificationForm::class);
    }

    public function declaration(){
    	return $this->hasMany(DeclarationByStudent::class);
    }

    public function payment_autorization(){
    	return $this->hasMany(PaymentAuthorization::class);
    }

    public function qualificatin_request(){
        return $this->hasOne(QualificationRequest::class);
    }

    public function student_qualification_request(){
        return $this->hasMany(StudentQualificationRequest::class);
    }

    public function refund_request(){
        return $this->hasMany(RefundRequest::class);
    }
}
