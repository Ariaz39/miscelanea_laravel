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
            ['nombre'=>'Estudiantes','valor'=>'123456']
        ]);
    }
}
