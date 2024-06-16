<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable = ['fecha', 'nro_carta', 'procedencia', 'detalle', 'archivo', 'repositorio'];
}

