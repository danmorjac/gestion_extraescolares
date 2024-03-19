<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $table = 'actividades';

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha',
        'hora',
         // Agrega aquí los nuevos campos si los has añadido a la tabla
    ];

    // Si tienes relaciones con otros modelos, las definirías aquí
}
