<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationRequestForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualification_request_form', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->string('course');
            $table->string('document_being_requested');
            $table->string('student_signature');
            $table->datetime('date_received');
            $table->string('student_acknowledgement_receipt_qualification');
            $table->datetime('student_acknowledgement_receipt_qualification_date');
            $table->string('office_finance_approval');
            $table->datetime('office_finance_approval_date');
            $table->string('office_academic_approval');
            $table->datetime('office_academic_approval_date');
            $table->string('office_issued_by');
            $table->datetime('office_issued_by_date');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualification_request_form');
    }
}
