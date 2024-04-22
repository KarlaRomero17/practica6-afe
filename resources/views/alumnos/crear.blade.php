<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Alumnos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="d-flex justify-content-between mt-5">
            <h2>Nueva Alumno</h2>
            <a href="/alumnos" class="btn btn-primary mb-3">Ver listado de alumnos</a>
        </div>

        <form action="/alumnos/crear" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Su nombre">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido"
                            placeholder="Su Apellido">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="text" class="form-control" id="edad" name="edad" placeholder="Su edad">
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Su dirección">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

    </div>
</body>

</html>
