<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CityIdentifier extends Model
{
    //
    protected $table = 'city_identifier';

    public function state_identifier(){
    	return $this->belongsTo(StateIdentifier::class,'state_id');
    }
}
