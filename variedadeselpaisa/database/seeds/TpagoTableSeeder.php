<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TpagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tpago')->insert([
            ['nombre'=>'Adelantado'],
            ['nombre'=>'Vencido']
        ]);
    }
}
