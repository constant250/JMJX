<?php

use Illuminate\Database\Seeder;

class DisabilityTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_disability_types` VALUES (1,'11','Hearing/Deaf'),(2,'12','Physical'),(3,'13','Intellectual'),(4,'14','Learning'),(5,'15','Mental Illness'),(6,'16','Acquired Brain Impairment'),(7,'17','Vision'),(8,'18','Medical Condition'),(9,'19','Other'),(10,'99','Unspecified')");
    }
}
