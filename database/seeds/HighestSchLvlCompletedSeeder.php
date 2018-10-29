<?php

use Illuminate\Database\Seeder;

class HighestSchLvlCompletedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_highest_schl_lvl_completed` VALUES (1,'02','Did not go to school'),(2,'08','Year 8 or below'),(3,'09','Year 9 or equivalent'),(4,'10','Completed Year 10'),(5,'11','Completed Year 11'),(6,'12','Completed Year 12'),(7,'@@','Not stated (Question asked of the client but no answer provided)')");
    }
}
