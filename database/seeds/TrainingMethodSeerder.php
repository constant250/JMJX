<?php

use Illuminate\Database\Seeder;

class TrainingMethodSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_training_method` VALUES (1,'A','Class room based'),(2,'B','Correspondence'),(3,'C','Online delivery'),(4,'D','Work placement'),(5,'E','Face to face - reduce load')");
    }
}
