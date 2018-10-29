<?php

use Illuminate\Database\Seeder;

class CompletionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_completion_status` VALUES (1,'Not Complete',NULL),(2,'Withdrawn',NULL),(3,'Competent','C'),(4,'Credit transfer','CT'),(5,'Not Yet Competent','NYC')");
    }
}
