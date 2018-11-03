<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChangeOfPersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('change_of_personal_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->date('dob');
            $table->string('mobile_number');
            $table->string('home_number');
            $table->string('email');
            $table->string('address');
            $table->string('signature', 50);
            $table->datetime('signature_date');
            $table->string('update_student_database_signature', 50);
            $table->datetime('update_student_database_signature_date');
            $table->string('update_student_prisms_signature', 50);
            $table->datetime('update_student_prisms_signature_date');
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
        Schema::dropIfExists('change_of_personal_details');
    }
}
