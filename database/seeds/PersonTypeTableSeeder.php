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
        $datas = [
            [
                'name'          => 'root',
                'created_at'    => Carbon::now()
            ],
            [
                'name'          => 'student',
                'created_at'    => Carbon::now()
            ]
        ];

        foreach ($datas as $data) {
            # code...
            DB::table('person_types')->insert($data);
        }
        
    }
}
