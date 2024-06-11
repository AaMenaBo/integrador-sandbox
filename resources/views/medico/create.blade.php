<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medicos | Create</title>
</head>

<body>
    <header></header>

    <h1>Se mostrara el formulario para insetar medicos</h1>
    <form action="/medicos" method="POST">
        @csrf
        <label>
            Codigo
            <input type="number" name="codigo" maxlength="9">
        </label>
        <label>
            Nombre
            <input type="text" name="nombre">
        </label>
        <label>
            Telefono
            <input type="number" name="telefono">
        </label>
        <label>
            Direccion
            <input type="text" name="direccion">
        </label>
        <label>
            Email
            <input type="email" name="email">
        </label>
        <br>
        <br>
        <button type="submit">Crear</button>
    </form>

    <footer></footer>
</body>

</html>
