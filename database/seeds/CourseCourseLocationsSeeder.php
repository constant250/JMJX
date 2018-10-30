<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CourseCourseLocationsSeeder extends Seeder
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
        		'course_id'  => 1,
        		'state_identifier_id'  => 11,
        		'os_tuition_individual'  => 8500,
        		'os_tuition_package'  => 8500.00,
        		'ofs_tuition_individual'  => 11500.00,
        		'ofs_tuition_package'  => 11500.00,
        		'material_fee'  => 500,
        		'enrolment_fee'  => 250,
        		'created_at'  => Carbon::now()
        	],
        	[
        		'course_id'  => 2,
        		'state_identifier_id'  => 11,
        		'os_tuition_individual'  => 6000.00,
        		'os_tuition_package'  => 4200.00,
        		'ofs_tuition_individual'  => 16000.00,
        		'ofs_tuition_package'  => 16000.00,
        		'material_fee'  => 500,
        		'enrolment_fee'  => 250,
        		'created_at'  => Carbon::now()
        	],
        	[
        		'course_id'  => 3,
        		'state_identifier_id'  => 11,
        		'os_tuition_individual'  => 6000.00,
        		'os_tuition_package'  => 4200.00,
        		'ofs_tuition_individual'  => 20000.00,
        		'ofs_tuition_package'  => 20000.00,
        		'material_fee'  => 500,
        		'enrolment_fee'  => 250,
        		'created_at'  => Carbon::now()
        	],
        	[
        		'course_id'  => 4,
        		'state_identifier_id'  => 11,
        		'os_tuition_individual'  => 9000.00,
        		'os_tuition_package'  => 6000.00,
        		'ofs_tuition_individual'  => 24000.00,
        		'ofs_tuition_package'  => 9000.00,
        		'material_fee'  => 300,
        		'enrolment_fee'  => 250,
        		'created_at'  => Carbon::now()
        	],
        	[
        		'course_id'  => 5,
        		'state_identifier_id'  => 11,
        		'os_tuition_individual'  => 8100.00,
        		'os_tuition_package'  => 8100.00,
        		'ofs_tuition_individual'  => 8100.00,
        		'ofs_tuition_package'  => 8100.00,
        		'material_fee'  => 300,
        		'enrolment_fee'  => 250,
        		'created_at'  => Carbon::now()
        	],
        	[
        		'course_id'  => 6,
        		'state_identifier_id'  => 11,
        		'os_tuition_individual'  => 16500.00,
        		'os_tuition_package'  => 10000.00,
        		'ofs_tuition_individual'  => 16500.00,
        		'ofs_tuition_package'  => 12000.00,
        		'material_fee'  => 300,
        		'enrolment_fee'  => 250,
        		'created_at'  => Carbon::now()
        	],
        	[
        		'course_id'  => 7,
        		'state_identifier_id'  => 2,
        		'os_tuition_individual'  => 12000.00,
        		'os_tuition_package'  => 10000.00,
        		'ofs_tuition_individual'  => 15500.00,
        		'ofs_tuition_package'  => 14500.00,
        		'material_fee'  => 500,
        		'enrolment_fee'  => 250,
        		'created_at'  => Carbon::now()
        	],
        	[
        		'course_id'  => 7,
        		'state_identifier_id'  => 3,
        		'os_tuition_individual'  => 15500.00,
        		'os_tuition_package'  => 14500.00,
        		'ofs_tuition_individual'  => 15500.00,
        		'ofs_tuition_package'  => 14500.00,
        		'material_fee'  => 500,
        		'enrolment_fee'  => 250,
        		'created_at'  => Carbon::now()
        	],
        	[
        		'course_id'  => 8,
        		'state_identifier_id'  => 2,
        		'os_tuition_individual'  => 13000.00,
        		'os_tuition_package'  => 12000.00,
        		'ofs_tuition_individual'  => 14500.00,
        		'ofs_tuition_package'  => 13500.00,
        		'material_fee'  => 500,
        		'enrolment_fee'  => 250,
        		'created_at'  => Carbon::now()
        	],
        	[
        		'course_id'  => 8,
        		'state_identifier_id'  => 3,
        		'os_tuition_individual'  => 14500.00,
        		'os_tuition_package'  => 13500.00,
        		'ofs_tuition_individual'  => 14500.00,
        		'ofs_tuition_package'  => 13500.00,
        		'material_fee'  => 500,
        		'enrolment_fee'  => 250,
        		'created_at'  => Carbon::now()
        	],
        	[
        		'course_id'  => 9,
        		'state_identifier_id'  => 3,
        		'os_tuition_individual'  => 1700.00,
        		'os_tuition_package'  => 1700.00,
        		'ofs_tuition_individual'  => 0,
        		'ofs_tuition_package'  => 0,
        		'material_fee'  => 100,
        		'enrolment_fee'  => 250,
        		'created_at'  => Carbon::now()
        	]
        ];
        foreach ($datas as $key => $data) {
        	DB::table('course_state_identifier')->insert($data);
        }
    }
}
