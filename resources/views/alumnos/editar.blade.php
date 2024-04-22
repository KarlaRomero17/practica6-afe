<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Alumno</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <div class="d-flex justify-content-between">
            <h2>Editar Alumno</h2>
            <a href="/alumnos" class="btn btn-primary mb-3">Ver listado de alumnos</a>
        </div>
        <form action="/alumnos/editar/{{ $alumno->id }}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Su nombre"
                            value="{{ $alumno->nombre }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido"
                            placeholder="Su apellido" value="{{ $alumno->apellido }}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="text" class="form-control" id="edad" name="edad" placeholder="Su edad"
                    value="{{ $alumno->edad }}">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Su dirección"
                    value="{{ $alumno->direccion }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>

</html>
