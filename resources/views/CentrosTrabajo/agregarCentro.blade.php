@extends('bootstrap')
@section('master')
<form method="POST" action="{{ route('centroTrabajo.insertar') }}" class="text-light">
  @csrf
  <input
    type="text"
    name="Nombre"
    placeholder="Nombre"
    class="form-control mb-2"
  </>

  <input
    type="text"
    name="Telefono"
    placeholder="Telefono"
    class="form-control mb-2"
  </>

  <input
    type="number"
    name="CoordinacionID"
    placeholder="Coordinacion"
    class="form-control mb-2"
  </>


  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection
