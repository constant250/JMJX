<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfessionalReference extends Model
{
    //

	protected $fillable = ['name','position','organisation','relationship','phone_number','mobile_number','email','created_at'];

    public function rpl_applications(){
    	return $this->belongsTo(RplApplication::class);
    }
}
