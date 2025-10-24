@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="section-title">Reservar Aula: {{ $aula->nombre }}</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-aula">
                <div class="card-body">
                    <form action="{{ route('reservas.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="aula_id" value="{{ $aula->id }}">
                        <div class="mb-3">
                            <label for="fecha_hora_inicio" class="form-label">Fecha y Hora de Inicio</label>
                            <input type="datetime-local" class="form-control" id="fecha_hora_inicio" name="fecha_hora_inicio" required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_hora_fin" class="form-label">Fecha y Hora de Fin</label>
                            <input type="datetime-local" class="form-control" id="fecha_hora_fin" name="fecha_hora_fin" required>
                        </div>
                        <button type="submit" class="btn btn-primary-custom w-100">Reservar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection