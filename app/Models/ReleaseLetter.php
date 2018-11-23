<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReleaseLetter extends Model
{
    //
    protected $fillable = [
    	'party_id','student_declaration', 'signature','signature_date'
    ];

    public function party(){
    	$this->belongsTo(Party::class);
    }
}
