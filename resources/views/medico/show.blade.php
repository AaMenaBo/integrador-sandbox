<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | Medicos</title>
</head>

<body>
    <h1>Aqui se muestra el medico {{ $medico->nombre . ' ' . $medico->apellido1 . ' ' . $medico->apellido2 }} </h1>
    <a href="/medicos">Volver</a>
    <ul>
        <li>Cedula {{ $medico->codigo }}</li>
        <li>Telefono {{ $medico->telefono }}</li>
        <li>Direccion {{ $medico->direccion }}</li>
        <li>Email {{ $medico->email }}</li>
        <li>Fecha de Registro {{ $medico->created_at->format('d/m/y') }}</li>
    </ul>

    <a href="/medicos/{{ $medico->id }}/edit">Editar Información</a>
    <form action="/medicos/{{ $medico->id }}/delete"method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">BORRAR REGISTRO</button>
    </form>

</body>

</html>
