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
           ['usuario_id'=>'1','tfra_id'=>'1', 'valor'=>'10000', 'concepto'=>'Lorem ipsum dolor', 'estado'=>'1', 'created_at'=>'2020-07-18'],
           ['usuario_id'=>'1','tfra_id'=>'2', 'valor'=>'20000', 'concepto'=>'Lorem ipsum dolor', 'estado'=>'1', 'created_at'=>'2020-04-18'],
           ['usuario_id'=>'2','tfra_id'=>'1', 'valor'=>'30000', 'concepto'=>'Lorem ipsum dolor', 'estado'=>'1', 'created_at'=>'2019-05-18'],
           ['usuario_id'=>'2','tfra_id'=>'2', 'valor'=>'40000', 'concepto'=>'Lorem ipsum dolor', 'estado'=>'1', 'created_at'=>'2021-05-18'],
           //['usuario_id'=>'3','tfra_id'=>'1', 'valor'=>'50000', 'concepto'=>'Lorem ipsum dolor', 'estado'=>'1', 'created_at]=>'2020-05-18,
           //['usuario_id'=>'3','tfra_id'=>'2', 'valor'=>'60000', 'concepto'=>'Lorem ipsum dolor', 'estado'=>'1', 'created_at]=>'2020-05-18,
        ]);
    }
}
