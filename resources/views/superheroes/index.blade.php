<h1>Lista de Superhéroes</h1>

<a href="{{ route('superheroes.create') }}">Agregar nuevo</a>

<table border="1">
    <tr>
        <th>Nombre real</th>
        <th>Nombre héroe</th>
        <th>Acciones</th>
    </tr>

    @foreach ($superheroes as $hero)
    <tr>
        <td>{{ $hero->real_name }}</td>
        <td>{{ $hero->hero_name }}</td>
        <td>
            <a href="{{ route('superheroes.show', $hero->id) }}">Ver</a>
            <a href="{{ route('superheroes.edit', $hero->id) }}">Editar</a>

            <form action="{{ route('superheroes.destroy', $hero->id) }}" method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="submit">Eliminar</button>
    </form>
        </td>
    </tr>
    @endforeach
</table>