<?php

namespace App\Models;

use Kodeine\Metable\Metable;
use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    //
    // protected $table = 'persons'
   use Metable;

    protected $fillable = [
    						'prefix',
    						'person_type',
    						'party_id',
    						'firstname',
    						'middlename',
    						'lastname',
    						'dob'
    					];

   	public function party(){
   		return $this->belongsTo(Party::class);
   	}

   	public function person_type()
   	{
   		return $this->belongsTo(PersonType::class);
   	}

    public function lln_form()
    {
      return $this->hasOne(LlnForm::class, 'person_id');
    }
}
