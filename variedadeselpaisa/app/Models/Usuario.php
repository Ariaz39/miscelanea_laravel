<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property integer $grupos_id
 * @property integer $servicios_id
 * @property string $nombre
 * @property int $celular
 * @property string $direccion
 * @property int $ip
 * @property string $f_inicio
 * @property string $created_at
 * @property string $updated_at
 * @property Grupo $grupo
 * @property Servicio $servicio
 */
class Usuario extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'usuario';

    /**
     * @var array
     */
    protected $fillable = ['grupos_id', 'servicios_id', 'nombre', 'celular', 'direccion', 'ip', 'f_inicio', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function grupo()
    {
        return $this->belongsTo('App\Models\Grupo', 'grupos_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function servicio()
    {
        return $this->belongsTo('App\Models\Servicio', 'servicios_id');
    }
}
