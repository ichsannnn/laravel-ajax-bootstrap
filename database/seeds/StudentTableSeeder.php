<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
        	'nis'		=> '10578',
        	'nama'		=> 'Ichsan Firdaus',
        	'kelas'		=> 'XI-RPL'
        ]);
    }
}
