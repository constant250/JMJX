<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RepresentativeApplication extends Model
{
    //
    public function references(){
    	return $this->hasMany(ReferenceRepresentativeApplication::class);
    }
}
