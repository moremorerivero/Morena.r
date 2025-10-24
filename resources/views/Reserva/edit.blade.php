<h1>Editar Aula</h1>

<form action="{{ route('aulas.update', $aula) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nombre: <input type="text" name="nombre" value="{{ $aula->nombre }}"></label>
    <button type="submit">Actualizar</button>
</form>
