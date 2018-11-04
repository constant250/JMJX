<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professional_references', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rpl_applications_id')->unsigned();
            $table->string('name');
            $table->string('position');
            $table->string('organisation');
            $table->string('relationship');
            $table->string('phone_number');
            $table->string('mobile_number');
            $table->string('email');
            $table->foreign('rpl_applications_id')->references('id')->on('rpl_applications')->onDelete('cascade');
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
        Schema::dropIfExists('professional_references');
    }
}
