<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CourseLocationSeder extends Seeder
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
        		'name' 		=> 'Queensland',
        		'short_key' => 'QLD',
        		'created_at' => Carbon::now(),
        	],
        	[
        		'name' 		=> 'Victoria',
        		'short_key' => 'VIC',
        		'created_at' => Carbon::now(),
        	],
        	[
        		'name' 		=> 'International',
        		'short_key' => 'INT',
        		'created_at' => Carbon::now(),
        	]
        ];

        foreach ($datas as $key => $data) {
        	# code...
        	DB::table('course_locations')->insert($data);
        }
    }
}
