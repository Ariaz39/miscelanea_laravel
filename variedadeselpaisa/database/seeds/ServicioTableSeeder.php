<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ServicioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([
            ['nombre'=>'Internet 2Mbs','valor'=>'15000'],
            ['nombre'=>'Internet 3Mbs','valor'=>'25000'],
            ['nombre'=>'Internet 5Mbs','valor'=>'50000'],
            ['nombre'=>'Internet 10Mbs','valor'=>'75000'],
            ['nombre'=>'Internet 20Mbs','valor'=>'100000']
        ]);
    }
}
