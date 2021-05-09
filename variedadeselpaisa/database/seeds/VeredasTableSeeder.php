<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VeredasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('veredas')->insert([
            ['nombre'=>'San Antonio'],
            ['nombre'=>'Pastales'],
            ['nombre'=>'San Bernardo'],
            ['nombre'=>'Villarica'],
            ['nombre'=>'San Bernardo'],
        ]);
    }
}
