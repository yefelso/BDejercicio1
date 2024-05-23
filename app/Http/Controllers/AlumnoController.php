<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno; // Asegúrate de importar el modelo Alumno adecuado
use Illuminate\Support\Facades\Route;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view('posts.index', compact('alumnos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required|integer',
            'curso' => 'required',
            'grado_seccion' => 'required',
        ]);

        Alumno::create($request->all());
        return redirect()->route('posts.index')
            ->with('success', 'Alumno creado exitosamente.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @param  string  $id
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'edad' => 'required|integer',
            'curso' => 'required',
            'grado_seccion' => 'required',
        ]);

        $alumno = Alumno::find($id);
        $alumno->update($request->all());
        return redirect()->route('posts.index')
            ->with('success', 'Alumno actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return redirect()->route('posts.index')
            ->with('success', 'Alumno eliminado exitosamente');
    }

    // Resto de funciones de las rutas

}
