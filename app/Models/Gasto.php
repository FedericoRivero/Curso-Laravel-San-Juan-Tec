<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    use HasFactory;

    protected $guarded = ['pago_id'];

    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria');
    }

    public function items()
    {
        return $this->hasMany('App\Models\Item');
    }

    public function pago()
    {
        return $this->hasOne('App\Models\Pago');
    }

    public function etiquetas()
    {
        return $this->belongsToMany('App\Models\Etiqueta');
    }

    public function Perfil()
    {
        return $this->belongsTo('App\Models\Perfil');
    }
}
