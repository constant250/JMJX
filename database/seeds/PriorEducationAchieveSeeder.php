<?php

use Illuminate\Database\Seeder;

class PriorEducationAchieveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_prior_education_achievements` VALUES (10,'000','None'),(1,'008','Bachelor Degree or Higher Degree level (defined for AVETMISS use only)'),(2,'410','Advanced Diploma or Associate Degree Level'),(3,'420','Diploma Level'),(4,'511','Certificate IV'),(5,'514','Certificate III'),(6,'521','Certificate II'),(7,'524','Certificate I'),(8,'990','Miscellaneous Education')");
    }
}
