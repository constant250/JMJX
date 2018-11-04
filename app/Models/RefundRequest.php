<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefundRequest extends Model
{
    //
    protected $table = 'refund_request';

    public function students(){
    	return $this->belongsTo(Student::class);
    }
}
