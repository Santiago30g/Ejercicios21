<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <div>
                <div>
                    <div>Viajeros</div>
                    <br>
                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Dni</th>
                                    <th>Nombre</th>
                                    <th>Telefono</th>
                                    <th>Direccion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($travelers as $traveler)
                                <tr>
                                    <td>{{ $traveler->id }}</td>
                                    <td>{{ $traveler->Dni }}</td>
                                    <td>{{ $traveler->Nombre }}</td>
                                    <td>{{ $traveler->Telefono }}</td>
                                    <td>{{ $traveler->Direccion }}</td>
                                    <td>
                                        <form action="{{ route('travelers.destroy', $traveler->id) }}" method="POST">
                                            <a href="{{ route('travelers.show', $traveler->id) }}" class="">Ver</a>
                                            <a href="{{ route('travelers.edit', $traveler->id) }}" class="">Editar</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        <a href="{{ route('travelers.create') }}" class="">Crear Nuevo Profesor</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>