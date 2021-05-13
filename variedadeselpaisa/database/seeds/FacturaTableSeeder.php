<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('factura')->insert([
           ['usuario_id'=>'1','tfra_id'=>'1','concepto'=>'Lorem ipsum dolor'],
           ['usuario_id'=>'2','tfra_id'=>'2','concepto'=>'Lorem ipsum dolor'],
           ['usuario_id'=>'3','tfra_id'=>'1','concepto'=>'Lorem ipsum dolor'],
        ]);
    }
}
