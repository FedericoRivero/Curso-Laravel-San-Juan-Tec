<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = ['fecha', 'monto'];

    public function gasto()
    {
        return $this->belongsTo('App\Models\Gasto');
    }
}
