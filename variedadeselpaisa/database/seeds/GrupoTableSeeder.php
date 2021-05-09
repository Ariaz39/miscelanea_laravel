<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GrupoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
            ['nombre'=>'Estudiantes','ciudad'=>'Ibagué'],
            ['nombre'=>'Campesinos','ciudad'=>'Manizales']
        ]);
    }
}
