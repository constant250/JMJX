<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLlnFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lln_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_id');
            $table->integer('years_in_au');
            $table->string('language_you_speak');
            $table->text('training_goals');
            $table->text('self_reflection');
            $table->text('assessor_notes');
            $table->text('task_1_q_1');
            $table->text('task_1_q_2');
            $table->text('task_1_q_3');
            $table->text('task_2_q_1');
            $table->text('task_2_q_2');
            $table->text('task_2_q_3');
            $table->text('task_2_q_4');
            $table->text('task_2_q_5');
            $table->text('task_2_q_6');
            $table->text('task_2_q_7');
            $table->text('task_2_q_8');
            $table->string('assessed_by');
            $table->date('date_assessed');
            $table->text('assessment_summary');
            $table->string('lln_outcome');
            $table->text('lln_outcome_notes');
            $table->string('assessor_name');
            $table->string('assessor_signature');
            $table->date('assessor_signature_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lln_forms');
    }
}
