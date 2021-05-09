<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nombre
 * @property int $valor
 * @property string $created_at
 * @property string $updated_at
 * @property Usuario[] $usuarios
 */
class Servicios extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'valor', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario', 'servicios_id');
    }
}
