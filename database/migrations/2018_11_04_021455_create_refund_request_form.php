<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefundRequestForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refund_request', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('students_id')->unsigned();
            $table->string('course_code')->index();
            $table->datetime('course_start_date');
            $table->text('reason_for_refund');
            $table->string('bank_name');
            $table->string('bank_branch');
            $table->string('account_name');
            $table->string('bsb');
            $table->string('account_number');
            $table->string('swiftcode');
            $table->string('country');
            $table->boolean('understand_refund_policy');
            $table->boolean('understand_days_to_access_refund_policy');
            $table->string('student_signature');
            $table->datetime('date_received');
            $table->string('office_signature');
            $table->datetime('office_signature_date');
            $table->string('office_refund_applicable');
            $table->text('office_comments');
            $table->datetime('office_date_letter_was_sent');
            $table->string('office_refund_process_signature');
            $table->datetime('office_refund_process_signature_date');
            $table->foreign('course_code')->references('code')->on('courses')->onDelete('cascade');
            $table->foreign('students_id')->references('id')->on('students')->onDelete('cascade');
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
        Schema::dropIfExists('refund_request');
    }
}
