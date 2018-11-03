<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditTransferApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_transfer_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('party_id');
            $table->integer('unit_code');
            $table->string('evidence_provided_by_student');
            $table->string('credit_transfer_provided');
            $table->string('student_signature');
            $table->date('student_signature_date');
            $table->text('if_no');
            $table->string('course_duration_change', 10);
            $table->string('student_been_communicated', 10);
            $table->string('mode_of_communication');
            $table->string('staff_name');
            $table->string('staff_designation');
            $table->string('staff_signature');
            $table->date('staff_signature_date');
            $table->string('feedback_student_signature');
            $table->date('feedback_student_signature_date');
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
        Schema::dropIfExists('credit_transfer_applications');
    }
}

