<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentAuthorization extends Model
{
    //
    protected $table = 'payment_autorization_form';

    protected $fillable = [
    	"name_of_person_nominated",
		"nominated_address",
		"nominated_phone_number",
		"nominated_bank_name",
		"nominated_account_number",
		"nominated_bsb_branch_number_swiftcode",
		// "fullname",
		// "stud_fullname",
		"student_id",
		"student_signature",
		"date_received",
    ];

    public function student(){
    	return $this->belongsTo(Student::class);
    }
}
