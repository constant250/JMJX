<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CourseDetailSeeder extends Seeder
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
        		'course_code' 				=> 'SIT30816',
        		'cricos_code'  				=> '097109G',
        		'duration_weeks'			=> '55',
        		'duration_weeks_package'	=> '55',
        		'created_at'				=> Carbon::now()
        	],
        	[
        		'course_code' 				=> 'SIT40516',
        		'cricos_code'  				=> '097111B',
        		'duration_weeks'			=> '73',
        		'duration_weeks_package'	=> '26',
        		'created_at'				=> Carbon::now()
        	],
        	[
        		'course_code' 				=> 'SIT50416',
        		'cricos_code'  				=> '097110C',
        		'duration_weeks'			=> '73',
        		'duration_weeks_package'	=> '26',
        		'created_at'				=> Carbon::now()
        	],
        	[
        		'course_code' 				=> 'SIT60316',
        		'cricos_code'  				=> '097112A',
        		'duration_weeks'			=> '104',
        		'duration_weeks_package'	=> '26',
        		'created_at'				=> Carbon::now()
        	],
        	[
        		'course_code' 				=> 'CHC30113',
        		'cricos_code'  				=> '090063F',
        		'duration_weeks'			=> '58',
        		'duration_weeks_package'	=> '58',
        		'created_at'				=> Carbon::now()
        	],
        	[
        		'course_code' 				=> 'CHC50113',
        		'cricos_code'  				=> '090064E',
        		'duration_weeks'			=> '90',
        		'duration_weeks_package'	=> '50',
        		'created_at'				=> Carbon::now()
        	],
        	[
        		'course_code' 				=> 'CPC50210',
        		'cricos_code'  				=> '098090E',
        		'duration_weeks'			=> '52',
        		'duration_weeks_package'	=> '52',
        		'created_at'				=> Carbon::now()
        	],
        	[
        		'course_code' 				=> 'CPC30211',
        		'cricos_code'  				=> '098089J',
        		'duration_weeks'			=> '52',
        		'duration_weeks_package'	=> '52',
        		'created_at'				=> Carbon::now()
        	],
        	[
        		'course_code' 				=> 'CPP30411',
        		'cricos_code'  				=> '098091D',
        		'duration_weeks'			=> '7',
        		'duration_weeks_package'	=> '7',
        		'created_at'				=> Carbon::now()
        	],
        ];
        foreach ($datas as $key => $data) {
        	DB::table('course_details')->insert($data);
        }
    }
}
