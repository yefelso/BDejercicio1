<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos
    protected $table = 'alumnos';

    // Nombre de la columna que sirve como clave primaria en la tabla
    // Por defecto, Eloquent asume que el nombre de la columna primaria es 'id'
    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre',
        'apellido',
        'edad',
        'curso',
        'grado_seccion',
    ];
}