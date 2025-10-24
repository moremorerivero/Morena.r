<h1>Listado de Reservas</h1>
<a href="{{ route('reservas.create') }}">Crear Reservas</a>

<ul>
    @foreach($reservas as $reservas)
        <li>
            {{ $reservas->nombre }}
            <a href="{{ route('reservas.show', $reservas) }}">Ver</a>
            <a href="{{ route('reservas.edit', $reservas) }}">Editar</a>
        </li>
    @endforeach
</ul>
