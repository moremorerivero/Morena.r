<h1>Crear Horario</h1>

<form action="{{ route('horario.store') }}" method="POST">
    @csrf
    <label>Nombre: <input type="text" name="nombre"></label>
    <button type="submit">Guardar</button>
</form>
