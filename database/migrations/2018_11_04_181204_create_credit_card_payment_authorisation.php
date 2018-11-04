<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditCardPaymentAuthorisation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_card_payment_authorisation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type_of_card');
            $table->date('exp_date');
            $table->string('credit_card_number');
            $table->string('amount_authorised');
            $table->string('student_signature');
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
        Schema::dropIfExists('credit_card_payment_authorisation');
    }
}
