<h1>Editar Foco Historico</h1>

<form action="{{ route('FocoHistorico.update', $FocoHistorico) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nombre: <input type="text" name="nombre" value="{{ $FocoHistorico->nombre }}"></label>
    <button type="submit">Actualizar</button>
</form>
