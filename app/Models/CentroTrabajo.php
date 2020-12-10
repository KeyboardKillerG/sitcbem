<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroTrabajo extends Model
{
    use HasFactory;

    public function coordinacion(){ //$libro->categoria->nombre
      return $this->belongsTo(Coordinacion::class); //Pertenece a una categoría.
    }
}
