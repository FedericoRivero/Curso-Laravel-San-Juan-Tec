<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'importe',
    ];

    public function gasto()
    {
        return $this->belongsTo('App\Models\Gasto');
    }
}
