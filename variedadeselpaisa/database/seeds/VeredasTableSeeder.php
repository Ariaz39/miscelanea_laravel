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
            ['nombre'=>'San Antonio','ciudad'=>'Ibagué'],
            ['nombre'=>'Pastales','ciudad'=>'Ibagué'],
            ['nombre'=>'San Bernardo','ciudad'=>'Ibagué'],
            ['nombre'=>'Villarica','ciudad'=>'Ibagué'],
            ['nombre'=>'Villa Hermosa','ciudad'=>'Ibagué'],
            ['nombre'=>'Santa Isabel','ciudad'=>'Ibagué'],
            ['nombre'=>'Líbano','ciudad'=>'Ibagué'],
            ['nombre'=>'Murillo','ciudad'=>'Ibagué'],
            ['nombre'=>'Anzoátegui','ciudad'=>'Ibagué'],
            ['nombre'=>'Flandes','ciudad'=>'Ibagué'],
            ['nombre'=>'Flandes','ciudad'=>'Ibagué'],
            ['nombre'=>'Flandes','ciudad'=>'Ibagué'],
        ]);
    }
}
