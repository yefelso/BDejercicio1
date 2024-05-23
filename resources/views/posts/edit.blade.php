<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Student</title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .outer-container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f8f9fa; /* Light grey background for outer container */
    }

    .inner-container {
      background-color: white;
      padding: 3rem; /* Increase padding for a larger container */
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 50%; /* Adjust width to make the container larger */
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .input-line {
      width: 100%;
      border: none;
      border-bottom: 2px solid #28a745; /* Change border color to green */
      border-radius: 0;
      box-shadow: none;
      padding: 0.5rem 0;
    }

    .input-line:focus {
      border-bottom-color: #28a745; /* Change focus border color to green */
      outline: none;
      box-shadow: none;
    }

    .text-center {
      text-align: center;
      margin-bottom: 1.5rem;
    }

    .btn {
      display: inline-block;
      font-weight: 400;
      color: #fff;
      text-align: center;
      vertical-align: middle;
      user-select: none;
      background-color: #007bff;
      border: 1px solid #007bff;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      line-height: 1.5;
      border-radius: 0.25rem;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }
  </style>
</head>
<body>
  <div class="outer-container">
    <div class="inner-container">
      <h3 class="text-center">Edit Student</h3>
      <form action="{{ route('alumnos.update', $alumnos->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control input-line" id="nombre" name="nombre" value="{{ $alumnos->nombre }}" required>
        </div>
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control input-line" id="apellido" name="apellido" value="{{ $alumnos->apellido }}" required>
        </div>
        <div class="form-group">
          <label for="edad">Edad</label>
          <input type="number" class="form-control input-line" id="edad" name="edad" value="{{ $alumnos->edad }}" required>
        </div>
        <div class="form-group">
          <label for="curso">Curso</label>
          <input type="text" class="form-control input-line" id="curso" name="curso" value="{{ $alumnos->curso }}" required>
        </div>
        <div class="form-group">
          <label for="grado_seccion">Grado/Sección</label>
          <input type="text" class="form-control input-line" id="grado_seccion" name="grado_seccion" value="{{ $alumnos->grado_seccion }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update Student</button>
      </form>
    </div>
  </div>
</body>
</html>
