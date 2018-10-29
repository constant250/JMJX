<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    //
    protected $table = 'party';

    protected $fillable = [
    						'name',
    						'active'
    					];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function student(){
    	return $this->hasOne(Student::class);
    }
}
