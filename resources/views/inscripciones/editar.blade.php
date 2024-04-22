<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Inscripción</title>
    <!-- Agregar el enlace al archivo CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between">
            <h2>Editar Inscripción</h2>
            <a href="/materia" class="btn btn-primary mb-3">Ver listado de materias</a>
        </div>
        <form action="/inscripciones/crear" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="materia">Materia:</label>
                        <select class="form-control" id="materia" name="materia" disabled>
                            <option value="0">Seleccione</option>
                            @foreach ($materias as $materia)
                                <option value="{{ $materia->id }}" {{ $materia->id == $materiaInscrita->id ? 'selected' : '' }}>
                                    {{ $materia->nombre }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alumnos">Alumnos:</label>
                        <select name="alumnos[]" id="alumnos" class="form-control" multiple size="3">
                            @foreach ($alumnos as $alumno)
                                <option value="{{ $alumno->id }}"
                                    @foreach ($materiaInscrita->alumno as $al)
                                        @if ($alumno->id == $al->id)
                                            selected
                                        @endif
                                    @endforeach>{{ $alumno->nombre }} {{ $alumno->apellido }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>
            <button type="submit" class="btn btn-primary float-right"> Guardar cambios</button>
        </form>
        <div class="row mt-5">
            <h2>Reporte de Inscripciones</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Materia</th>
                        <th>Descripción</th>
                        <th>Curso</th>
                        <th>Alumno</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materiaInscrita->alumno as $alumno)
                        <tr>
                            <td>{{ $materiaInscrita->nombre }}</td>
                            <td>{{ $materiaInscrita->descripcion }}</td>
                            <td>{{ $materiaInscrita->curso }}</td>
                            <td>{{ $alumno->nombre }} {{ $alumno->apellido }}</td>
                            <td>
                                <a href="/inscripciones/eliminar/{{ $alumno->pivot->id}}"
                                    class="btn btn-danger" onclick="return eliminarAlumno('Eliminar Alumno')">Eliminar</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
</body>

</html>
