<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StudentDetailSeeder extends Seeder
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
        		'student_id' => 1,
        		'course_code' => 'SIT30816',
        		'student_type_id' => 1,
        		'training_location_id' => 1,
        		'course_start_date' => Carbon::now()->format('Y-m-d'),
        		'created_at'		=> Carbon::now(),
        	],
        	[
        		'student_id' => 2,
        		'course_code' => 'SIT30816',
        		'student_type_id' => 1,
        		'training_location_id' => 1,
        		'course_start_date' => Carbon::now()->format('Y-m-d'),
        		'created_at'		=> Carbon::now(),
        	],
        	[
        		'student_id' => 3,
        		'course_code' => 'SIT30816',
        		'student_type_id' => 1,
        		'training_location_id' => 1,
        		'course_start_date' => Carbon::now()->format('Y-m-d'),
        		'created_at'		=> Carbon::now(),
        	],
        	[
        		'student_id' => 4,
        		'course_code' => 'SIT30816',
        		'student_type_id' => 1,
        		'training_location_id' => 1,
        		'course_start_date' => Carbon::now()->format('Y-m-d'),
        		'created_at'		=> Carbon::now(),
        	],
        	[
        		'student_id' => 1,
        		'course_code' => 'CPC30211',
        		'student_type_id' => 1,
        		'training_location_id' => 1,
        		'course_start_date' => Carbon::now()->format('Y-m-d'),
        		'created_at'		=> Carbon::now(),
        	],
        	[
        		'student_id' => 3,
        		'course_code' => 'CPC30211',
        		'student_type_id' => 1,
        		'training_location_id' => 1,
        		'course_start_date' => Carbon::now()->format('Y-m-d'),
        		'created_at'		=> Carbon::now(),
        	]
        ];

         foreach ($datas as $data) {
	       		DB::table('student_details')->insert($data);
	       }
    }
}
