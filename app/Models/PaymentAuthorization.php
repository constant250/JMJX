<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentAuthorization extends Model
{
    //
    protected $table = 'payment_autorization_form';

    public function student(){
    	return $this->belongsTo(Student::class);
    }
}
