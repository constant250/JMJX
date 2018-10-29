<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostcodesGeo extends Model
{
    //
    protected $table = 'postcodes_geo';

    public function state_identifier(){
    	return $this->belongsTo(StateIdentifier::class,'state','state_key');
    }
}
