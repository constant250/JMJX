<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreviousEmploymentHistory extends Model
{
    //
    public function rpl_application(){
    	return $this->belongsTo(RplApplication::class);
    }
}
