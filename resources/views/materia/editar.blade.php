<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Materia</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">

        <div class="d-flex justify-content-between">
            <h2>Editar Materia</h2>
            <a href="/materia" class="btn btn-primary mb-3">Ver listado de Materias</a>
        </div>
        <div class="card p-3">
            <form action="/materia/editar/{{ $materias->id }}" method="POST">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ $materias->nombre }}">
                </div>
                <div class="form-group">
                    <label for="curso">Curso/Nivel:</label>
                    <input type="text" class="form-control" id="curso" name="curso" placeholder="Curso/Nivel" value="{{ $materias->curso }}">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción:</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" value="{{ $materias->descripcion }}">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</body>
</html>
