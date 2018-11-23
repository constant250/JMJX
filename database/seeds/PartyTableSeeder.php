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

        $datas = [
            [
                'name'          => 'Admin George Root',
                'active'        => 1,
                'created_at'    => Carbon::now()
            ],
            [
                'name'          => 'Mark John Gelua',
                'active'        => 1,
                'created_at'    => Carbon::now()
            ],
            [
                'name'          => 'Jayr Salvador Mendoza',
                'active'        => 1,
                'created_at'    => Carbon::now()
            ],
            [
                'name'          => 'Xyrell Shain Joaquin',
                'active'        => 1,
                'created_at'    => Carbon::now()
            ],
            [
                'name'          => 'Constant James Claro',
                'active'        => 1,
                'created_at'    => Carbon::now()
            ],

        ];

        /*DB::table('party')->insert([
        	'name'			=> 'Admin George Root',
        	'active'		=> 1,
        	'created_at'	=> Carbon::now()
        ]);*/
        foreach ($datas as $data) {
            # code...
            DB::table('party')->insert($data);
        }
    }
}
