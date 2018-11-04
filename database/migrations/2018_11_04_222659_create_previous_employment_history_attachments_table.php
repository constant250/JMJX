<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviousEmploymentHistoryAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_employment_history_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('previous_employment_historie_id');
            $table->string('name');
            $table->string('hash_name');
            $table->integer('size');
            $table->string('mime_type');
            $table->string('ext', 5);
            $table->string('_input');
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
        Schema::dropIfExists('previous_employment_history_attachments');
    }
}
