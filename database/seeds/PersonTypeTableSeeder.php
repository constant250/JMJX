<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PersonTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('person_types')->insert([
        	'name' 		 => 'root',
        	'created_at' => Carbon::now()
        ]);
    }
}
