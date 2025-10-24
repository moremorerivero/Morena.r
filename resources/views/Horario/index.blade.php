<h1>Listado de Horario</h1>
<a href="{{ route('horario.create') }}">Crear Horario</a>

<ul>
    @foreach($aulas as $aula)
        <li>
            {{ $horario->nombre }}
            <a href="{{ route('horario.show', $horario) }}">Ver</a>
            <a href="{{ route('horario.edit', $horario) }}">Editar</a>
        </li>
    @endforeach
</ul>
