<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Alumno;
use IlluminateSupportFacadesRoute;
class AlumnoController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */
  public function index()
  {
    $alumnos = Alumno::all();
    return view('posts.index', compact('alumnos'));
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @return IlluminateHttpResponse
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

    ALumno::create($request->all());
    return redirect()->route('posts.index')
      ->with('success', 'alumno created successfully.');
  }
  /**
   * Update the specified resource in storage.
   *
   * @param  IlluminateHttpRequest  $request
   * @param  int  $id
   * @return IlluminateHttpResponse
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
    $alumnos = Alumno::find($id);
    $alumnos->update($request->all());
    return redirect()->route('posts.index')
      ->with('success', 'Alumno updated successfully.');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return IlluminateHttpResponse
   */
  public function destroy($id)
  {
    $alumnos = Alumno::find($id);
    $alumnos->delete();
    return redirect()->route('posts.index')
      ->with('success', 'Alumno deleted successfully');
  }
  // routes functions
  /**
   * Show the form for creating a new post.
   *
   * @return IlluminateHttpResponse
   */
  public function create()
  {
    return view('posts.create');
  }
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return IlluminateHttpResponse
   */
  public function show($id)
  {
    $alumnos = Alumno::find($id);
    return view('posts.show', compact('alumnos'));
  }
  /**
   * Show the form for editing the specified post.
   *
   * @param  int  $id
   * @return IlluminateHttpResponse
   */
  public function edit($id)
  {
    $alumnos = Alumno::find($id);
    return view('posts.edit', compact('alumnos'));
  }
}