<?php

use Illuminate\Database\Seeder;

class LabourForceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_labour_force_status` VALUES (1,'01','Full-time employee'),(2,'02','Part-time employee'),(3,'03','Self-employed - not employing others'),(4,'04','Employer'),(5,'05','Employed - unpaid worker in a family business'),(6,'06','Unemployed - seeking full-time work'),(7,'07','Unemployed - seeking part-time work'),(8,'08','Not employed - not seeking employment'),(9,'@@','Not stated (Question asked of the client but no answer provided)')");
    }
}
