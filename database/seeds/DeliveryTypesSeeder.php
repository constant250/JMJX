<?php

use Illuminate\Database\Seeder;

class DeliveryTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert("INSERT INTO `sp_delivery_types` VALUES (1,'10','Classroom-based'),(2,'20','Electronic based'),(4,'40','Other delivery (eg correspondence)'),(5,'50','Not applicable - recognition of prior learning/ recognition of current competency/ credit transfer'),(30,'30','Employment based')");
    }
}
