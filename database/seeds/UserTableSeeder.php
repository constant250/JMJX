<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
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
                'party_id'       => 1,
                'username'       => 'root',
                'password'       => Hash::make('adminroot123!@#'),
                'avatar'         => 'default.png',
                'created_at'     => Carbon::now()
            ],
            [
                'party_id'       => 2,
                'username'       => 'mark',
                'password'       => Hash::make('mark123!@#'),
                'avatar'         => 'default.png',
                'created_at'     => Carbon::now()
            ],
            [
                'party_id'       => 3,
                'username'       => 'jayr',
                'password'       => Hash::make('jayr123!@#'),
                'avatar'         => 'default.png',
                'created_at'     => Carbon::now()
            ],
            [
                'party_id'       => 5,
                'username'       => 'constant',
                'password'       => Hash::make('constant123!@#'),
                'avatar'         => 'default.png',
                'created_at'     => Carbon::now()
            ],
            [
                'party_id'       => 4,
                'username'       => 'shain',
                'password'       => Hash::make('shain123!@#'),
                'avatar'         => 'default.png',
                'created_at'     => Carbon::now()
            ],
        ];
        // DB::table('users')->insert([
        // 	'party_id' 		 => 1,
        // 	'username'		 => 'root',
        // 	'password'	     => Hash::make('adminroot123!@#'),
        // 	'avatar'		 => 'default.png',
        // 	'created_at' 	 => Carbon::now()
        // ]);

         foreach ($datas as $data) {
            # code...
            DB::table('users')->insert($data);
        }
    }
}
