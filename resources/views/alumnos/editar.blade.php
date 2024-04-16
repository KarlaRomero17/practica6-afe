<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        body {
            margin: auto;
            padding: 50px;
        }

        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

    </style>
    <a href="/alumnos">Ver listado de alumnosx</a>
    <h2>Nuevo Alumno</h2>
    <div>
        <form action="/alumnos/editar/{{ $alumno->id}}" method ="POST">
            @csrf
            {{ method_field('PUT') }}
            <label>Nombre:</label>
            <input type="text" name="nombre" placeholder="Su nombre" value="{{ $alumno->nombre}}">
            <label>Apellido:</label>
            <input type="text" name="apellido" placeholder="Su Apellido" value="{{ $alumno->apellido}}">
            <label>Edad:</label>
            <input type="text" name="edad" placeholder="Su edad" value="{{ $alumno->edad}}">
            <label>Dirección:</label>
            <input type="text" name="direccion" placeholder="Su dirección" value="{{ $alumno->direccion}}">
            <input type="submit" value="Guardar">
            </form>
    </div>
</body>
</html>
