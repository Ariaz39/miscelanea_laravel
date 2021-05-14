<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property integer $grupos_id
 * @property integer $servicios_id
 * @property integer $tpago_id
 * @property string $nombre
 * @property int $celular
 * @property string $veredas_id
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
    protected $fillable = ['grupos_id', 'servicios_id', 'tpago_id', 'nombre', 'celular', 'veredas_id', 'ip', 'f_inicio', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function grupos()
    {
        return $this->belongsTo('App\Models\Grupos', 'grupos_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function servicios()
    {
        return $this->belongsTo('App\Models\Servicios', 'servicios_id');
    }

    public function tpago()
    {
        return $this->belongsTo('App\Models\Tpago', 'tpago_id');
    }

    public function veredas()
    {
        return $this->belongsTo('App\Models\Veredas', 'veredas_id');
    }
    public function factura()
    {
        return $this->belongsTo('App\Models\Factura', 'factura_id');
    }
}
