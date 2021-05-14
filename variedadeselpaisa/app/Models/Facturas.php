<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $usuario_id
 * @property integer $tfra_id
 * @property string $concepto
 * @property string $created_at
 * @property string $updated_at
 * @property integer $tfra
 * @property Usuario $usuario
 */
class Facturas extends Model
{

    protected $table = 'factura';

    protected $keyType = 'integer';

    protected $fillable = ['id','usuario_id', 'tfra_id', 'concepto', 'valor', 'created_at', 'updated_at'];

    public function tfra()
    {
        return $this->belongsTo('App\Models\Tfra');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario');
    }
}
