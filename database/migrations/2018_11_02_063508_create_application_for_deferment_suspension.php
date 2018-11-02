<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationForDefermentSuspension extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_for_deferment_suspension', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('party_id');
            $table->string('reason_for_request', 50);
            $table->text('reason_in_detail');
            $table->string('document_attached');
            $table->string('picked_request');
            $table->date('picked_date_from');
            $table->date('picked_date_to');
            $table->string('signature', 50);
            $table->datetime('signature_date');
            $table->string('finance_signature', 50);
            $table->datetime('finance_signature_date');
            $table->string('request_signature', 50);
            $table->datetime('request_signature_date');
            $table->string('decision_of_request', 30);
            $table->string('decision_granted_signature', 30);
            $table->datetime('decision_granted_signature_date');
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
        Schema::dropIfExists('application_for_deferment_suspension');
    }
}
