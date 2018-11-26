<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreviousEmploymentHistory extends Model
{
    //

	protected $fillable = ['employers_details','period_to','period_from','position_held','ft_pt_cas','desc_mjr_duties','created_at'];

    public function rpl_application(){
    	return $this->belongsTo(RplApplication::class);
    }
}
