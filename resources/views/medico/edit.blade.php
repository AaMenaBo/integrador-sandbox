<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medicos | Edit</title>
</head>

<body>
    <header></header>

    <h1>Se mostrara el formulario para insetar medicos</h1>
    <form action="/medicos/{{ $medico->id }}/edit" method="POST">
        @csrf
        @method('PUT')
        <label>
            Codigo
            <input type="number" name="codigo" value="{{ $medico->codigo }}" readonly>
        </label>
        <label>
            Nombre
            <input type="text" name="nombre"
                value="{{ $medico->nombre . ' ' . $medico->apellido1 . ' ' . $medico->apellido2 }}">
        </label>
        <label>
            Telefono
            <input type="number" name="telefono"value="{{ $medico->telefono }}">
        </label>
        <label>
            Direccion
            <input type="text" name="direccion"value="{{ $medico->direccion }}">
        </label>
        <label>
            Email
            <input type="email" name="email"value="{{ $medico->email }}">
        </label>
        <br>
        <br>
        <button type="submit">Guardar Cambios</button>
    </form>

    <footer></footer>
</body>

</html>
