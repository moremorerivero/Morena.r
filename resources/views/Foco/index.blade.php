<h1>Listado de Foco</h1>
<a href="{{ route('foco.create') }}">Crear foco</a>

<ul>
    @foreach($aulas as $Foco)
        <li>
            {{ $aula->nombre }}
            <a href="{{ route('Foco.show', $Foco) }}">Ver</a>
            <a href="{{ route('Foco.edit', $Foco) }}">Editar</a>
        </li>
    @endforeach
</ul>
