<?php

use Illuminate\Database\Seeder;

class OutcomeStatusOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_outcome_status_options` VALUES (1,20,'Competency achieved/pass'),(2,30,'Competency not achieved/fail'),(3,40,'Withdrawn'),(4,51,'Recognition of prior learning - granted'),(5,52,'Recognition of prior learning - not granted'),(6,53,'Recognition of current competency - granted'),(7,54,'Recognition of current competency - not granted'),(8,60,'Credit transfer'),(9,65,'Gap Training'),(10,70,'Continuing enrolment'),(11,81,'Non-assessed enrolment - Satisfactorily completed'),(12,82,'Non-assessed enrolment - Withdrawn or not satisfactorily completed')");
    }
}
