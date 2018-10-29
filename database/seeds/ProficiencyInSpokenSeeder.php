<?php

use Illuminate\Database\Seeder;

class ProficiencyInSpokenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_proficiency_in_spoken_english` VALUES (1,'1','Very Well'),(2,'2','Well'),(3,'3','Not well'),(4,'4','Not at all'),(5,'@','Not stated')");
    }
}
