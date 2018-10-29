<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persons extends Model
{
    //
    // protected $table = 'persons'

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
}
