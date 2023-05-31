<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Terceros extends Model
{
    protected $table = 'terceros';
    protected $fillable = [
        'nit', 'razon_social', 'tipo', 'activo'
    ];
}
