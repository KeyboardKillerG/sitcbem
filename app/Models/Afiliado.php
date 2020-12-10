<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model
{
    use HasFactory;


  public function centroTrabajos(){ //$libro->categoria->nombre
      return $this->belongsTo(CentroTrabajo::class); //Pertenece a una categoría.
  }
  public function estadoAfiliado(){ //$libro->categoria->nombre
      return $this->belongsTo(Estado::class); //Pertenece a una categoría.
  }
}
