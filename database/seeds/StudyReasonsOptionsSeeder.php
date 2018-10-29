<?php

use Illuminate\Database\Seeder;

class StudyReasonsOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_study_reason_options` VALUES (1,'01','To get a job'),(2,'02','To develop my existing business'),(3,'03','To start my own business'),(4,'04','To try for a different career'),(5,'05','To get a better job or promotion'),(6,'06','It was a requirement of my job'),(7,'07','I wanted extra skills for my job'),(8,'08','To get into another course of study'),(9,'11','Other reasons'),(10,'12','For personal interest or self-development'),(11,'@@','Not specified')");
    }
}
