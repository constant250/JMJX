<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReferenceRepresentativeApplication extends Model
{
    //

	protected $fillable = ['organisation_name','contact_person','position','telephone','email','fax','address'];

    public function representative_application(){
    	return $this->belongsTo(RepresentativeApplication::class);
    }
}
