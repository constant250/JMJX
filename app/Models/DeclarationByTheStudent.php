<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeclarationByTheStudent extends Model
{
    //

    protected $fillable = ['student_signature','student_date'];

    public function party(){
    	return $this->belongsTo(Party::class);
    }
}
