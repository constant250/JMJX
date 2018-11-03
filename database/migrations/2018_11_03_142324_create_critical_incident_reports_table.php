<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriticalIncidentReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('critical_incident_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('party_id');
            $table->text('type_of_incident');
            $table->text('type_of_incident_other');
            $table->date('incident_date');
            $table->time('incident_time');
            $table->string('incident_location');
            $table->text('incident_detailed_information');
            $table->text('description_of_injury');
            $table->text('description_of_incident');
            $table->text('description_of_damage');
            $table->text('other_services_involved');
            $table->string('report_received_by');
            $table->text('persons_involved');
            $table->string('higher_management_name');
            $table->string('higher_management_contact_number');
            $table->string('higher_management_address');
            $table->string('higher_management_signature', 50);
            $table->date('higher_management_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('critical_incident_reports');
    }
}
