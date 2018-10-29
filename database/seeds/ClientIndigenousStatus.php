<?php

use Illuminate\Database\Seeder;

class ClientIndigenousStatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_client_indigenous_status` VALUES (1,'1','Yes, Aboriginal'),(2,'2','Yes, Torres Strait Islander'),(3,'3','Yes, Aboriginal AND Torres Strait Islander'),(4,'4','No, Neither Aboriginal nor Torres Strait Islander'),(5,'@','Not stated (Question asked of the client but no answer provided)')");
    }
}
