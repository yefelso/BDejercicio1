<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Edit Student</h3>
      <form action="{{ route('alumnos.update', $alumnos->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $alumnos->nombre }}" required>
        </div>
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $alumnos->apellido }}" required>
        </div>
        <div class="form-group">
          <label for="edad">Edad</label>
          <input type="number" class="form-control" id="edad" name="edad" value="{{ $alumnos->edad }}" required>
        </div>
        <div class="form-group">
          <label for="curso">Curso</label>
          <input type="text" class="form-control" id="curso" name="curso" value="{{ $alumnos->curso }}" required>
        </div>
        <div class="form-group">
          <label for="grado_seccion">Grado/Sección</label>
          <input type="text" class="form-control" id="grado_seccion" name="grado_seccion" value="{{ $alumnos->grado_seccion }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update Student</button>
      </form>
    </div>
  </div>
</div>
