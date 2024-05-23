<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Alumno extends Eloquent
{
    // Nombre de la tabla en la base de datos
    protected $collection = 'alumnos'; // MongoDB usa 'collection' en lugar de 'table'

    // Nombre de la columna que sirve como clave primaria en la colección
    protected $primaryKey = '_id'; // MongoDB usa '_id' como clave primaria por defecto

    protected $fillable = [
        'nombre',
        'apellido',
        'edad',
        'curso',
        'grado_seccion',
    ];
}
