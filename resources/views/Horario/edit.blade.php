<h1>Editar Horario</h1>

<form action="{{ route('horario.update', $horario) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nombre: <input type="text" name="nombre" value="{{ $horario->nombre }}"></label>
    <button type="submit">Actualizar</button>
</form>
