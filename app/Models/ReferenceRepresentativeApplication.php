<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferenceRepresentativeApplication extends Model
{
    //
    public function representative_application(){
    	return $this->belongsTo(RepresentativeApplication::class);
    }
}
