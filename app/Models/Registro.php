<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $table = 'registros';

    // Definir la relación con Actividad
    public function actividad()
    {
        return $this->belongsTo(Actividad::class);
    }
}
