<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValidationErrors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('validation_errors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rule_id',8)->nullable(false);
            $table->string('rule_category_id',10)->nullable(false);
            $table->string('rule_type',10)->nullable(false);
            $table->text('description')->nullable(false);
            $table->string('IsWarningOnly',3)->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('validation_errors');
    }
}
