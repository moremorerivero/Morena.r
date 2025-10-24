<h1>Editar Materia</h1>

<form action="{{ route('materia.update', materia) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nombre: <input type="text" name="nombre" value="{{ $materia->nombre }}"></label>
    <button type="submit">Actualizar</button>
</form>
