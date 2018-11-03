<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationForReleaseLetterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_for_release_letters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('party_id');
            $table->text('student_declaration');
            $table->string('signature', 50);
            $table->datetime('signature_date');
            $table->string('received_signature', 50);
            $table->datetime('received_signature_date');
            $table->string('outcome_of_request');
            $table->text('reason_for_request');
            $table->string('processed_by', 50);
            $table->datetime('processed_date');
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
        Schema::dropIfExists('application_for_release_letters');
    }
}
