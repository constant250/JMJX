<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PersonSeeder extends Seeder
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
        		'prefix' 		=> 'Mr',
        		'person_type' 	=> 2,
        		'party_id' 		=> 2,
        		'firstname'		=> 'Mark John',
        		'middlename'	=> '',
        		'lastname'		=> 'Gelua',
        		'dob'			=> '1993-04-10',
        		'created_at'    => Carbon::now()
        	],
        	[
        		'prefix' 		=> 'Mr',
        		'person_type' 	=> 2,
        		'party_id' 		=> 3,
        		'firstname'		=> 'Jayr Salvador',
        		'middlename'	=> '',
        		'lastname'		=> 'Mendoza',
        		'dob'			=> '1990-10-21',
        		'created_at'    => Carbon::now()
        	],
        	[
        		'prefix' 		=> 'Mr',
        		'person_type' 	=> 2,
        		'party_id' 		=> 5,
        		'firstname'		=> 'Constant James',
        		'middlename'	=> '',
        		'lastname'		=> 'Claro',
        		'dob'			=> '1990-10-21',
        		'created_at'    => Carbon::now()
        	],
        	[
        		'prefix' 		=> 'Ms',
        		'person_type' 	=> 2,
        		'party_id' 		=> 4,
        		'firstname'		=> 'Xyrell Shain',
        		'middlename'	=> '',
        		'lastname'		=> 'Joaquin',
        		'dob'			=> '1994-3-19',
        		'created_at'    => Carbon::now()
        	],
        ];

        foreach ($datas as $data) {
            # code...
            DB::table('persons')->insert($data);
        }

    }
}
