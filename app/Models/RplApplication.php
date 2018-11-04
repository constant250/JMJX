<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RplApplication extends Model
{
    //

    public function professional_references(){
    	return $this->hasMany(ProfessionalReference::class);
    }

    public function previous_employment_histories(){
    	return $this->hasMany(PreviousEmploymentHistory::class);
    }
}
