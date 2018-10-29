<?php

use Illuminate\Database\Seeder;

class SurveyContactStatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_survey_contact_status` VALUES (1,'A','Available for survey use'),(2,'C','Correctional facility (address or enrolment)'),(3,'D','Deceased student'),(4,'E','Excluded from survey use'),(5,'I','Invalid address / Itinerant student (very low likelihood of response)'),(6,'M','Minor\'s under age of 15 (not to be surveyed)'),(7,'O','Overseas (address or enrolment)')");
    }
}
