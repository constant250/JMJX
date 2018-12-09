<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QualificationRequest extends Model
{
    //
    protected $table = 'qualification_request_form';

    protected $fillable = [
    	'document_being_requested',
    	'course',
    	'student_signature',
    	'date_received',
    	'student_acknowledgement_receipt_qualification',
    	'student_acknowledgement_receipt_qualification_date',
    	'office_finance_approval',
    	'office_finance_approval_date',
    	'office_academic_approval',
    	'office_academic_approval_date',
    	'office_issued_by',
    	'office_issued_by_date',
    ];

    public function student(){
    	return $this->belongsTo(Student::class);
    }
}
