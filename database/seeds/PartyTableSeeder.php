<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PartyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('party')->insert([
        	'name'			=> 'Admin George Root',
        	'active'		=> 1,
        	'created_at'	=> Carbon::now()
        ]);
    }
}
