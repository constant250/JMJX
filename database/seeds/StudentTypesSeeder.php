<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StudentTypesSeeder extends Seeder
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
        		'name' => 'onshore',
        		'created_at'	=>Carbon::now()
        	],
        	[
        		'name' => 'offshore',
        		'created_at'	=>Carbon::now()
        	],
        	[
        		'name' => 'international',
        		'created_at'	=>Carbon::now()
        	]
        ];
       foreach ($datas as $key => $data) {
       	# code...
       	DB::table('student_types')->insert($data);
       }
    }
}
