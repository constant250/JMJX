<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenceRepresentativeApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reference_representative_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('representative_application_id');
            $table->string('organisation_name');
            $table->string('contact_person');
            $table->string('position');
            $table->string('address');
            $table->string('telephone');
            $table->string('fax');
            $table->string('email');
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
        Schema::dropIfExists('reference_representative_applications');
    }
}
