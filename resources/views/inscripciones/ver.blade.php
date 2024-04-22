<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materia</title>
    <!-- Agregar el enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h2>Materia</h2>
            <a href="/materia" class="btn btn-primary mb-3">Ver listado de materias</a>
        </div>
        <div class="card p-3">
            <div class="card-body">
                <p class="card-text"><strong>Nombre:</strong> {{ $materias->nombre }}</p>
                <p class="card-text"><strong>Curso:</strong> {{ $materias->curso }}</p>
                <p class="card-text"><strong>Descripción:</strong> {{ $materias->descripcion }}</p>
            </div>
        </div>
    </div>
</body>
</html>
