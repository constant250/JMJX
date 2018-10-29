<?php

use Illuminate\Database\Seeder;

class RecognitionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::INSERT("INSERT INTO `sp_recognition_status` VALUES (1,'11','Nationally accredited qualification designed to lead to a qualification specified in a national Trai'),(2,'12','Nationally recognised accredited course, other than a qualification designed to lead to a qualification specified in a national Training Package'),(3,'14','Other courses')");
    }
}
