<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentAuthorizatioonForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_autorization_form', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_of_person_nominated');
            $table->string('nominated_address');
            $table->string('nominated_phone_number');
            $table->string('nominated_bank_name');
            $table->string('nominated_account_number');
            $table->string('nominated_bsb_branch_number_swiftcode');
            $table->string('declaration_by_student_name');
            $table->integer('student_id')->unsigned();
            $table->integer('student_signature');
            $table->datetime('date_received');
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
        Schema::dropIfExists('payment_autorization_form');
    }
}
