<?php

use Illuminate\Database\Seeder;

class StudentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_student_status` VALUES (1,'D','Deferred'),(2,'CX','Cancelled'),(3,'C','Completed'),(4,'WD','Withdrawn'),(5,'E','Extended')");
    }
}
