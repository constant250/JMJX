<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriorEducationAchievements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prior_education_achievements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('value',3)->unique()->nullable(false);
            $table->string('description',100)->nullable(false);
        });
        DB::statement("ALTER TABLE sp_prior_education_achievements AUTO_INCREMENT = 0;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prior_education_achievements');
    }
}
