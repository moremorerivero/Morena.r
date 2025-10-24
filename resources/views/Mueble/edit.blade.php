<h1>Editar Reservas</h1>

<form action="{{ route('reservas.update', $reservas) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Nombre: <input type="text" name="nombre" value="{{ $reservas->nombre }}"></label>
    <button type="submit">Actualizar</button>
</form>
