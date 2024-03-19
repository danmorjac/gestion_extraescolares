<!-- actividad/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
  <h2 class="mb-4">Crear Nueva Actividad</h2>
  <form action="{{ route('actividad.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre de la Actividad</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripción</label>
      <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
    </div>
    <div class="mb-3">
      <label for="fecha" class="form-label">Fecha</label>
      <input type="date" class="form-control" id="fecha" name="fecha">
    </div>
    <div class="mb-3">
      <label for="hora" class="form-label">Hora</label>
      <input type="time" class="form-control" id="hora" name="hora">
    </div>
    <button type="submit" class="btn btn-primary">Crear Actividad</button>
  </form>
</div>
@endsection
