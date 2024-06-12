<x-app-layout>
    <header></header>

    <h1>Lista Medicos</h1>
    <ul>
        <table>
            <thead>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>Correo Electronico</th>
                <th>Fecha de Registro</th>
            </thead>
            <tbody>
                @foreach ($medicos as $med)
                    <tr>
                        <td>{{ $med->codigo }}</td>
                        <td>{{ $med->nombre . ' ' . $med->apellido1 . ' ' . $med->apellido2 }}</td>
                        <td>{{ $med->telefono }}</td>
                        <td>{{ $med->direccion }}</td>
                        <td>{{ $med->email }}</td>
                        <td>{{ $med->created_at }}</td>
                        <td>
                            <form action="{{ route('medico.edit', ['id' => $med->id]) }}" method="GET">
                                @csrf
                                <button type="submit">Editar</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('medico.delete', ['id' => $med->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        {{ $medicos->links() }}
    </ul>
    <footer></footer>
</x-app-layout>
