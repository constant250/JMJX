<?php

use Illuminate\Database\Seeder;

class PersonMetaSeeder extends Seeder
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
        		'persons_id' => 1,
        		'type'		=> 'string',
        		'key'		=> 'email',
        		'value'		=> 'test@test.com',
        	],
        	[
        		'persons_id' => 1,
        		'type'		=> 'string',
        		'key'		=> 'mobile',
        		'value'		=> '123123',
        	],
        	[
        		'persons_id' => 1,
        		'type'		=> 'string',
        		'key'		=> 'address',
        		'value'		=> 'babak',
        	],
        	[
        		'persons_id' => 2,
        		'type'		=> 'string',
        		'key'		=> 'email',
        		'value'		=> 'test@test.com',
        	],
        	[
        		'persons_id' => 2,
        		'type'		=> 'string',
        		'key'		=> 'mobile',
        		'value'		=> '123123',
        	],
        	[
        		'persons_id' => 2,
        		'type'		=> 'string',
        		'key'		=> 'address',
        		'value'		=> 'babak',
        	],
        	[
        		'persons_id' => 3,
        		'type'		=> 'string',
        		'key'		=> 'email',
        		'value'		=> 'test@test.com',
        	],
        	[
        		'persons_id' => 3,
        		'type'		=> 'string',
        		'key'		=> 'mobile',
        		'value'		=> '123123',
        	],
        	[
        		'persons_id' => 3,
        		'type'		=> 'string',
        		'key'		=> 'address',
        		'value'		=> 'babak',
        	],
        	[
        		'persons_id' => 4,
        		'type'		=> 'string',
        		'key'		=> 'email',
        		'value'		=> 'test@test.com',
        	],
        	[
        		'persons_id' => 4,
        		'type'		=> 'string',
        		'key'		=> 'mobile',
        		'value'		=> '123123',
        	],
        	[
        		'persons_id' => 4,
        		'type'		=> 'string',
        		'key'		=> 'address',
        		'value'		=> 'babak',
        	],
        ];

        foreach ($datas as $data) {
       		DB::table('persons_meta')->insert($data);
       }
    }
}
