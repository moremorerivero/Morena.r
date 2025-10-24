<h1>Crear Historial Uso Aire</h1>

<form action="{{ route('HistorialUsoAire.store') }}" method="POST">
    @csrf
    <label>Nombre: <input type="text" name="nombre"></label>
    <button type="submit">Guardar</button>
</form>
