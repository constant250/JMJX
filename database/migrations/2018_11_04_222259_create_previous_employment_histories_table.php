<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviousEmploymentHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_employment_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rpl_applications_id')->unsigned();
            $table->string('name');
            $table->string('address');
            $table->string('number');
            $table->string('period_of_employment');
            $table->string('position_held');
            $table->string('ft_pt_cas');
            $table->string('major_duties');
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
        Schema::dropIfExists('previous_employment_histories');
    }
}
