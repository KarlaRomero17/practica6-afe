<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reporte de Materia</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Reporte de Materia</h1>
      <div class="col-sm-12 text-right justify-content-between mb-3">
          <a href="/inscripciones/crear" class="btn btn-primary" >Inscribir</a>
          <a href="/materia/crear" class="btn btn-success">Nuevo</a>
        </div>

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Curso</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($materias as $item)
        <tr>
          <td>{{$item->nombre}}</td>
          <td>{{$item->curso}}</td>
          <td>
            <a href="/materia/ver/{{ $item->id }}" class="btn btn-secondary">Ver</a>
            <a href="/materia/editar/{{ $item->id }}" class="btn btn-primary">Editar</a>
            <a href="/inscripciones/editar/{{ $item->id }}" class="btn btn-info">Inscritos</a>
            <a href="/materia/eliminar/{{ $item->id }}" class="btn btn-danger" onclick="return eliminarAlumno('Eliminar Alumno')">Eliminar</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item {{ $materias->currentPage() == 1 ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $materias->previousPageUrl() }}" tabindex="-1">Anterior</a>
            </li>
            @for ($i = 1; $i <= $materias->lastPage(); $i++)
                <li class="page-item {{ $materias->currentPage() == $i ? 'active' : '' }}">
                    <a class="page-link" href="{{ $materias->url($i) }}">{{ $i }}</a>
                </li>
            @endfor
            <li class="page-item {{ $materias->currentPage() == $materias->lastPage() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $materias->nextPageUrl() }}">Siguiente</a>
            </li>
        </ul>
    </nav>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script>
    function eliminarAlumno(value) {
      console.log(value)
      action = confirm(value) ? true : event.preventDefault()
    }
  </script>
</body>
</html>
