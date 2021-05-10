<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\Usuario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'celular' => '31'.mt_rand(1,99999999),
        'grupos_id' => mt_rand(1,2),
        'veredas_id' => mt_rand(1,10),
        'servicios_id' => mt_rand(1,5),
        'tpago_id' => mt_rand(1,2),
        'ip' => mt_rand(1,999999999999),
        'f_inicio' => $faker->dateTimeThisDecade($max = 'now', $timezone = 'America/Bogota'),
    ];
});
