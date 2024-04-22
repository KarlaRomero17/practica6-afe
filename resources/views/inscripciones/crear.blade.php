<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Inscripción</title>
    <!-- Agregar el enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h2>Crear Inscripción</h2>
            <a href="/materia" class="btn btn-primary mb-3">Ver listado de materias</a>
        </div>
        <form action="'/inscripciones/crear'" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="materia">Materia:</label>
                        <select class="form-control" id="materia" name="materia">
                            <option value="0">Seleccione</option>
                            @foreach ($materias as $materia)
                                <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alumnos">Alumnos:</label>
                        <select name="alumnos[]" id="alumnos" class="form-control" multiple>
                            <option value="0">Seleccione</option>
                            @foreach ($alumnos as $alumno)
                                <option value="{{ $alumno->id }}" >{{ $alumno->nombre }} {{ $alumno->apellido }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-right">Guardar</button>
        </form>

    </div>

</body>

</html>
