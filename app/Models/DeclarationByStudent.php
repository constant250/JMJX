<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeclarationByStudent extends Model
{
    //
    protected $table = 'declaration_by_student';

    public function student(){
    	return $this->belongsTo(Student::class);
    }
}
