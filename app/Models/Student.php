<?php

namespace App\Models;

use Kodeine\Metable\Metable;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

	use Metable;
	protected $metaTable = 'students_meta';

    public function party(){
    	return $this->belongsTo(Party::class);
    }

    public function details(){
    	return $this->hasMany(StudentDetail::class);
    }
}
