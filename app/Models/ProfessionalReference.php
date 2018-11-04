<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfessionalReference extends Model
{
    //

    public function rpl_applications(){
    	return $this->belongsTo(RplApplication::class);
    }
}
