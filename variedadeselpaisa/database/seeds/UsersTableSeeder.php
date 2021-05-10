<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'Alejo Ariaz',
                'email'=>'ariaz39@hotmail.com',
                'password'=>'$2y$10$IcbuOFrk9DDvoxj0NeER2.LJSbVjpqspRtHOVi9hTxcuHDpLxwjH6']
        ]);
    }
}
