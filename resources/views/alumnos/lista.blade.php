<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de alumnos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <h1>Reporte de alumnos</h1>
        <div class="col-sm-12 text-right justify-content-between mb-3">
            <a href="/alumnos/crear" class="btn btn-success">Nuevo</a>
        </div>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $item)
                <tr>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->apellido}}</td>
                    <td>{{$item->edad}}</td>
                    <td>{{$item->direccion}}</td>
                    <td>
                        <a href="/alumnos/ver/{{ $item->id }}" class="btn btn-secondary">Ver</a>
                        <a href="/alumnos/editar/{{ $item->id }}" class="btn btn-primary">Editar</a>
                        <a href="/alumnos/eliminar/{{ $item->id }}" class="btn btn-danger" onclick="return eliminarAlumno('¿Estás seguro de que deseas eliminar este alumno?')">Eliminar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Paginación -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item {{ $alumnos->currentPage() == 1 ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $alumnos->previousPageUrl() }}" tabindex="-1">Anterior</a>
                </li>
                @for ($i = 1; $i <= $alumnos->lastPage(); $i++)
                    <li class="page-item {{ $alumnos->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $alumnos->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $alumnos->currentPage() == $alumnos->lastPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $alumnos->nextPageUrl() }}">Siguiente</a>
                </li>
            </ul>
        </nav>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script>
    function eliminarAlumno(value) {
        return confirm(value);
    }
</script>
</html>
