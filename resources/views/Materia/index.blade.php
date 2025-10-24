<h1>Listado de Materia</h1>
<a href="{{ route('materia.create') }}">Crear Materia</a>

<ul>
    @foreach($aulas as $aula)
        <li>
            {{ $aula->nombre }}
            <a href="{{ route('materia.show', $materia) }}">Ver</a>
            <a href="{{ route('materia.edit', $materia) }}">Editar</a>
        </li>
    @endforeach
</ul>
