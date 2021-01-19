@extends('bootstrap')
@section('master')
<form method="POST" action="{{ route('centroTrabajo.update', $centro->id) }}" class="text-light">
  @method('PUT')
  @csrf

  <input
    type="text"
    name="Nombre"
    placeholder="Nombre"
    class="form-control mb-2"
    value = "{{$centro->Nombre}}"
  </>

  <input
    type="text"
    name="Telefono"
    placeholder="Telefono"
    class="form-control mb-2"
    value = "{{$centro->Telefono}}"
  </>

  <input
    type="number"
    name="CoordinacionID"
    placeholder="Coordinacion"
    class="form-control mb-2"
    value = "{{$centro->CoordinacionID}}"
  </>


  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection
