<h1>Crear Materia</h1>

<form action="{{ route('materia.store') }}" method="POST">
    @csrf
    <label>Nombre: <input type="text" name="nombre"></label>
    <button type="submit">Guardar</button>
</form>
