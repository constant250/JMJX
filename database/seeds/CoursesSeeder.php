<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datas = [
        	[
        		'code'		 => 'SIT30816',
        		'name'		 => 'Certificate III in Commercial Cookery',
        		'created_at' => Carbon::now()
        	],
        	[
        		'code'		 => 'SIT40516',
        		'name'		 => 'Certificate IV in Commercial Cookery',
        		'created_at' => Carbon::now()
        	],
        	[
        		'code'		 => 'SIT50416',
        		'name'		 => 'Diploma of Hospitality Management',
        		'created_at' => Carbon::now()
        	],
        	[
        		'code'		 => 'SIT60316',
        		'name'		 => 'Advanced Diploma of Hospitality Management',
        		'created_at' => Carbon::now()
        	],
        	[
        		'code'		 => 'CHC30113',
        		'name'		 => 'Certificate III in Early Childhood Education and Care',
        		'created_at' => Carbon::now()
        	],
        	[
        		'code'		 => 'CHC50113',
        		'name'		 => 'Diploma of Early Childhood Education and Care',
        		'created_at' => Carbon::now()
        	],
        	[
        		'code'		 => 'CPC50210',
        		'name'		 => 'Diploma of Building and Construction (Building)',
        		'created_at' => Carbon::now()
        	],
        	[
        		'code'		 => 'CPC30211',
        		'name'		 => 'Certificate III in Carpentry',
        		'created_at' => Carbon::now()
        	],
        	[
        		'code'		 => 'CPP30411',
        		'name'		 => 'Certificate III in Security Operations',
        		'created_at' => Carbon::now()
        	],

        ];

       foreach ($datas as $data) {
       		DB::table('courses')->insert($data);
       }
    }
}
