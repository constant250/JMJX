<?php

use Illuminate\Database\Seeder;

class DeliveiryModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_delivery_mode` VALUES (1,'YNN','Internal only'),(2,'NYN','External only'),(3,'NNY','Workplace-based only'),(4,'YYN','Combination of internal and external'),(5,'YNY','Combination of internal and workplace-based'),(6,'NYY','Combination of external and workplace-based'),(7,'YYY','Combination of all modes'),(8,'NNN','Not applicable (RPL or credit transfer)')");
    }
}
