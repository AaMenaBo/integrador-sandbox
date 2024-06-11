<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Medicos</title>
</head>

<body>
    <header></header>

    <h1>Aqui se listan los medicos</h1>
    <ul>
        @foreach ($medicos as $medico)
            <li>
                <a href="/medicos/{{ $medico->id }}">{{ $medico->nombre }}</a>
            </li>
        @endforeach
    </ul>
    <footer></footer>
</body>

</html>
