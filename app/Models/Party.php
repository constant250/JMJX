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

    public function person(){
        return $this->hasOne(Persons::class);
    }

    public function releaseletter(){
        return $this->hasOne(ReleaseLetter::class);
    }
}
