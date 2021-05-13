<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(GrupoTableSeeder::class);
        $this->call(ServicioTableSeeder::class);
        $this->call(TpagoTableSeeder::class);
        $this->call(VeredasTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
        $this->call(TfraTableSeeder::class);
        $this->call(FacturaTableSeeder::class);
    }
}
