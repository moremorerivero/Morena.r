<h1>Listado de Foco Historico</h1>
<a href="{{ route('FocoHistorico.create') }}">Crear Foco Historico</a>

<ul>
    @foreach($FocoHistorico as $FocoHistorico)
        <li>
            {{ $aula->nombre }}
            <a href="{{ route('focoHistorico.show', $FocoHistorico) }}">Ver</a>
            <a href="{{ route('FocoHistorico.edit', $FocoHistorico) }}">Editar</a>
        </li>
    @endforeach
</ul>
