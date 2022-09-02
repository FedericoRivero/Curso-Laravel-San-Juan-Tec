<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfiles';

    protected $fillable = [
        'id',
        'nombre',
        'apellido',
    ];

    public function perfil()
    {
        return $this->hasOne('App\Models\Perfil')->withDefault(['id' => 0, 'nombre' => 'No hay perfil', 'apellido' => 'No hay perfil']);
    }
}
