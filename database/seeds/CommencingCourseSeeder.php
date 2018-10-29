<?php

use Illuminate\Database\Seeder;

class CommencingCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_commencing_course` VALUES (1,'2','Commencing enrolment in the qualification or course'),(2,'4','Continuing enrolment in the qualification or course from a previous year'),(3,'8','Unit of competency or module enrolment only')");
    }
}
