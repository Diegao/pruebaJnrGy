<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class Equipo extends Model
{

    use SoftDeletes;
    use HasFactory;

    public $table = 'equipos';

    public $fillable = [
        'tipo_id',
        'numero_serie',
        'imei',
        'observaciones',
        'update_at'
    ];

    protected $casts = [
        'numero_serie' => 'string',
        'imei' => 'string',
        'observaciones' => 'string',
        'update_at' => 'datetime'
    ];

    public static $rules = [
        'tipo_id' => 'required',
        'numero_serie' => 'required|string|max:255',
        'imei' => 'nullable|string|max:255',
        'observaciones' => 'nullable|string|max:65535',
        'created_at' => 'nullable',
        'update_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public static $messages = [

    ];

    public function tipo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\EquipoTipo::class, 'tipo_id');
    }

    public function clientes(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(\App\Models\Cliente::class, 'equipo_has_cliente');
    }

    public function servicios(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Servicio::class, 'equipo_id');
    }
}
