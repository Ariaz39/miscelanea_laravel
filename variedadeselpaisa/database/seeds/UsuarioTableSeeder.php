<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Usuario::class, 2)->create();
        //DB::table('usuario')->insert([
        //    ['nombre'=>'Admin',
        //      'celular'=>'3104561230',
        //      'grupos_id'=>'1',
        //      'veredas_id'=>'1',
        //      'servicios_id'=>'1',
        //      'tpago_id'=>'1',
        //      'ip'=>'123456123',
        //      'f_inicio'=>'2012-12-04']
        //]);
    }
}
