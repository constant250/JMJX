<?php

use Illuminate\Database\Seeder;

class PrgRecogIdentifierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_prg_recog_identifier` VALUES (1,11,'Nationally accredited qualification specified in a national training package'),(2,12,'Nationally recognised accredited course, other than a qualification specified in a national training package'),(3,13,'Nationally recognised skill set'),(4,14,'Other course'),(5,15,'Higher level qualification'),(6,16,'Locally recognised skill set')");
    }
}
