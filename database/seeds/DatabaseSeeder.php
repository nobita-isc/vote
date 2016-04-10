<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ideas')->insert([
        	[
	            'name' => 'Online contest system (Hưng)',
	            'code_name' => 'ocs',
        	],
        	[
	            'name' => 'Personal Asset Management (An)',
	            'code_name' => 'pam',
        	],
        	[
	            'name' => 'Random chat - online dating (Tuyến)',
	            'code_name' => 'rc',
        	],
        	[
	            'name' => 'Collaborative translation tool (Thành)',
	            'code_name' => 'clt',
        	],
        	[
	            'name' => 'Video transcription (Dương)',
	            'code_name' => 'vt',
        	],
        	[
	            'name' => 'Cloud based Lunar Calendar(Phúc)',
	            'code_name' => 'clc',
        	],
        	[
	            'name' => 'Hot time promotion deal (a.Tuấn)',
	            'code_name' => 'htp',
        	]
        ]);
    }
}
