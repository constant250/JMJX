<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefundRequest extends Model
{
    //
    protected $table = 'refund_request';

    protected $fillable = [
    	'course_start_date',
    	'reason_for_refund',
    	'bank_name',
    	'bank_branch',
    	'account_name',
    	'bsb',
    	'account_number',
    	'swiftcode',
    	'country',
    	'understand_refund_policy',
    	'understand_days_to_access_refund_policy',
    	'student_signature',
    	'date_received',
    	'office_signature',
    	'office_signature_date',
    	'office_refund_applicable',
    	'office_comments',
    	'office_date_letter_was_sent',
    	'office_refund_process_signature',
    	'office_refund_process_signature_date',
    ];

    public function students(){
    	return $this->belongsTo(Student::class);
    }

    public function course(){
    	return $this->belongsTo(Course::class,'course_code','code');
    }


}
