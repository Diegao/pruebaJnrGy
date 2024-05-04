<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{

    use SoftDeletes;
    use HasFactory;

    public $table = 'clientes';

    public $fillable = [
        'nombres',
        'apellidos',
        'dpi',
        'telefono',
        'correo',
        'direccion'
    ];

    protected $casts = [
        'nombres' => 'string',
        'apellidos' => 'string',
        'dpi' => 'string',
        'telefono' => 'string',
        'correo' => 'string',
        'direccion' => 'string'
    ];

    public static $rules = [
        'nombres' => 'required|string|max:255',
        'apellidos' => 'required|string|max:255',
        'dpi' => 'required|string|max:13',
        'telefono' => 'required|string|max:20',
        'correo' => 'nullable|string|max:255',
        'direccion' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public static $messages = [

    ];

    public function equipos(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(\App\Models\Equipo::class, 'equipo_has_cliente');
    }

    public function servicios(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Servicio::class, 'cliente_id');
    }
}
