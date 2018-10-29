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
        DB::table('users')->insert([
        	'party_id' 		 => 1,
        	'username'		 => 'root',
        	'password'	     => Hash::make('adminroot123!@#'),
        	'avatar'		 => 'default.png',
        	'created_at' 	 => Carbon::now()
        ]);
    }
}
