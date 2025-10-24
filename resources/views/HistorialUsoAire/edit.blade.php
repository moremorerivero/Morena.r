<h1>Editar Foco Historial Uso Aire</h1>

<form action="{{ route('historialusoaire.update', $historialusoaire) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nombre: <input type="text" name="nombre" value="{{ $historialusoaire->nombre }}"></label>
    <button type="submit">Actualizar</button>
</form>
