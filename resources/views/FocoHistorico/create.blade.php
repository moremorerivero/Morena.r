<h1>Crear FocoHistorico</h1>

<form action="{{ route('FocoHistorico.store') }}" method="POST">
    @csrf
    <label>Nombre: <input type="text" name="nombre"></label>
    <button type="submit">Guardar</button>
</form>
