<?php

use Illuminate\Database\Seeder;

class OrgTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_org_type` VALUES (1,21,'School - Government'),(2,23,'School - Australian Technical College'),(3,25,'School - Catholic'),(4,27,'School - Independent'),(5,31,'Technical and Further Education Institute (TAFE)'),(6,41,'University - Government'),(7,43,'University - Non Government Catholic'),(8,45,'University - Non Government Independent'),(9,51,'Enterprise - Government'),(10,53,'Enterprise - Non Government'),(11,61,'Community based adult education provider'),(12,91,'Privately operated RTO'),(13,93,'Professional Association'),(14,95,'Industry Association'),(15,97,'Equipment and/or product manufacturer or supplier'),(16,99,'Other - not elsewhere classified')");
    }
}
