<?php

use Illuminate\Database\Seeder;

class FundingSourceNationalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_funding_source_national` VALUES (1,'11','Commonwealth and state general purpose recurrent'),(2,'13','Commonwealth specific purpose programs'),(3,'15','State specific purpose programs'),(4,'20','Domestic full fee-paying client'),(5,'30','International full fee-paying client'),(6,'80','Revenue earned from another registered training organisation')");
    }
}
