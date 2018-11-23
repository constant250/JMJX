<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
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
        		'party_id' => 2,
        		'created_at'    => Carbon::now()
        	],
        	[
        		'party_id' => 3,
        		'created_at'    => Carbon::now()
        	],
        	[
        		'party_id' => 4,
        		'created_at'    => Carbon::now()
        	],
        	[
        		'party_id' => 5,
        		'created_at'    => Carbon::now()
        	],
        ];

         foreach ($datas as $data) {
            # code...
            DB::table('students')->insert($data);
        }
    }
}
