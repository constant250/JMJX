<?php

use Illuminate\Database\Seeder;

class AssesmentMethod extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_assessment_method` VALUES (1,'Knowledge Questions'),(2,'Case Scenario'),(3,'Class Activity'),(4,'Workplace Assessment Task'),(5,'Project'),(6,'Observation Checklist'),(7,'Incident Report'),(8,'Simulation')");
    }
}
