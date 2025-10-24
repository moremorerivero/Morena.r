<h1>Crear Reserva</h1>

<form action="{{ route('reservas.store') }}" method="POST">
    @csrf
    <label>Nombre: <input type="text" name="nombre"></label>
    <button type="submit">Guardar</button>
</form>
