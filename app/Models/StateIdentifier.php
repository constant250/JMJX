<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StateIdentifier extends Model
{
    //
    protected $table = 'state_identifier';

    public function city_identifier(){
    	return $this->hasMany(CityIdentifier::class);
    }

    public function postcodes_geo(){
    	return $this->hasMany(PostcodesGeo::class);
    }

}
