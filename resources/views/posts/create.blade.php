<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar Alumno</title>
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
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 30%;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .input-line {
      width: 100%;
      border: none;
      border-bottom: 2px solid fuchsia;
      border-radius: 0;
      box-shadow: none;
      padding: 0.5rem 0;
    }

    .input-line:focus {
      border-bottom-color: #007bff;
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
      <h3 class="text-center">Agregar un Nuevo Alumno</h3>
      <form action="{{ route('alumnos.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control input-line" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
          <label for="apellido">Apellido</label>
          <input type="text" class="form-control input-line" id="apellido" name="apellido" required>
        </div>
        <div class="form-group">
          <label for="edad">Edad</label>
          <input type="number" class="form-control input-line" id="edad" name="edad" required>
        </div>
        <div class="form-group">
          <label for="curso">Curso</label>
          <input type="text" class="form-control input-line" id="curso" name="curso" required>
        </div>
        <div class="form-group">
          <label for="grado_seccion">Grado/Sección</label>
          <input type="text" class="form-control input-line" id="grado_seccion" name="grado_seccion" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Agregar Alumno</button>
      </form>
    </div>
  </div>
</body>
</html>
