<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentativeApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representative_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contact_name');
            $table->string('position');
            $table->string('company_name');
            $table->string('abn_number')->nullable();
            $table->string('marn_number')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('fax');
            $table->string('mobile');
            $table->string('email');
            $table->string('how_long_business_operating');
            $table->string('number_of_int_students_ea_yr');
            $table->string('list_of_institution');
            $table->string('list_of_courses');
            $table->string('list_of_countries');
            $table->string('type_services_provided');
            $table->string('others');
            $table->boolean('charge_student_additional_fee');
            $table->text('promote_eti');
            $table->boolean('completed_all_relevant_sections');
            $table->boolean('include_application');
            $table->boolean('provide_copy_of_abn');
            $table->boolean('include_copy_of_cert_appointment_iii');
            $table->boolean('provide_copy_of_your_professional_industry');
            $table->boolean('and_other_supporting_doc');
            $table->string('name_of_applicant');
            $table->string('signature_of_applicant');
            $table->datetime('signature_date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representative_applications');
    }
}
