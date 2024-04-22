<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Alumno</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">

        <div class="d-flex justify-content-between">
            <h2>Detalles del Alumno</h2>
            <a href="/alumnos" class="btn btn-primary mb-3">Ver listado de alumnos</a>
        </div>
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Nombre:</strong> {{ $alumno->nombre }}</p>
                <p class="card-text"><strong>Apellido:</strong> {{ $alumno->apellido }}</p>
                <p class="card-text"><strong>Edad:</strong> {{ $alumno->edad }}</p>
                <p class="card-text"><strong>Dirección:</strong> {{ $alumno->direccion }}</p>
            </div>
        </div>
    </div>
</body>

</html>
