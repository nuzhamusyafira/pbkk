<?php

use Illuminate\Database\Seeder;

class matkulDummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
			DB::table('matkuls')->insert([                
				'kode_mk' => 'mk00'.$i,                
				'nama' => 'matkul ke-'.$i,                
				'sks' => '3',
			]);      
		}
    }
}
