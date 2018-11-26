<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RepresentativeApplication extends Model
{
    //

	protected $fillable = ['contact_name','company_name','position','abn_number','marn_number','address','phone','mobile','fax','email','how_long_business_operating','number_of_int_students_ea_yr','list_of_institution','list_of_courses','list_of_countries','type_services_provided','others','charge_student_additional_fee','promote_eti','completed_all_relevant_sections','include_application','provide_copy_of_abn','include_copy_of_cert_appointment_iii','provide_copy_of_your_professional_industry','and_other_supporting_doc','name_of_applicant','signature_of_applicant','signature_date'];

    public function references(){
    	return $this->hasMany(ReferenceRepresentativeApplication::class);
    }
}
