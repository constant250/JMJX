<?php

use Illuminate\Database\Seeder;

class PredominantDeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_predominant_delivery_mode` VALUES (1,'I','Internal delivery'),(2,'E','External delivery'),(3,'W','Workplace-based delivery'),(4,'N','Not applicable – recognition of prior learning/credit transfer')");
    }
}
