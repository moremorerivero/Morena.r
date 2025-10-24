<h1>Listado de Historial Uso Aire</h1>
<a href="{{ route('historialusoaire.create') }}">Crear Historial Uso Aire</a>

<ul>
    @foreach($historialusoaire as $historialusoaire)
        <li>
            {{ $focohistorico->nombre }}
            <a href="{{ route('historialusoaire.show', $historialusoaire) }}">Ver</a>
            <a href="{{ route('historialusoaire.edit', $historialusoaire) }}">Editar</a>
        </li>
    @endforeach
</ul>
