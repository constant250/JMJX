<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsAndAppealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints_and_appeals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('party_id');
            $table->string('position_of_complainant', 50);
            $table->date('date_cause_of_complaint');
            $table->date('date_appeal_refers');
            $table->text('reason_for_complaint');
            $table->text('reason_for_appeal');
            $table->string('complained_issue_before', 20);
            $table->date('complained_issue_before_date');
            $table->text('complaint_appeal_summary');
            $table->text('declaration');
            $table->string('declaration_signature', 50);
            $table->date('declaration_signature_date');
            $table->string('receiving_staff_member', 100);
            $table->date('receiving_date');
            $table->string('method_of_logdement', 20);
            $table->text('name_of_members_in_panel');
            $table->text('actions_proposed_by_panel');
            $table->text('implementation_of_proposed_action');
            $table->string('outcome', 30);
            $table->string('method_to_communicate_outcome', 30);
            $table->string('response_of_complainant', 191);
            $table->text('declaration_by_complainant');
            $table->string('declaration_by_complainant_signature', 50);
            $table->date('declaration_by_complainant_signature_date');
            $table->string('eti_representative_signature', 50);
            $table->date('eti_representative_signature_date');
            $table->string('eti_representative_print_name', 50);

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
        Schema::dropIfExists('complaints_and_appeals');
    }
}
