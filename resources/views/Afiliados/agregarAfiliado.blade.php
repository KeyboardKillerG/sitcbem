@extends('bootstrap')
@section('master')
<form method="POST" action="{{ route('afiliado.insertar') }}" class="text-light">
  @csrf
  <input
    type="text"
    name="Nombre"
    placeholder="Nombre"
    class="form-control mb-2"
  />
  <input
    type="text"
    name="ApellidoP"
    placeholder="Apellido Paterno"
    class="form-control mb-2"
  />
  <input
    type="text"
    name="ApellidoM"
    placeholder="Apellido Paterno"
    class="form-control mb-2"
  />
  <input
    type="date"
    name="FechaNacimiento"
    placeholder="Fecha Nacimiento"
    class="form-control mb-2"
  />

  <div class="form-group mb-2">
   <label for="genero">Genero</label>
   <select class="form-control" id="genero" name="Genero">
     <option>Hombre</option>
     <option>Mujer</option>
     <option>Otro</option>
   </select>
 </div>

 <div class="form-group mb-2">
  <label for="edocivil">Estado Civil</label>
  <select class="form-control" id="edocivil" name="EstadoCivil">
    <option>Soltero</option>
    <option>Casado</option>
  </select>
  </div>

   <input
    type="number"
    name="CodigoPostal"
    placeholder="202020"
    class="form-control mb-2"
    />

    <input
      type="text"
      name="Colonia"
      placeholder="Colonia"
      class="form-control mb-2"
    />

    <input
      type="text"
      name="Calle"
      placeholder="Calle"
      class="form-control mb-2"
    />

    <input
      type="text"
      name="NumeroExterior"
      placeholder="Numero Exterior"
      class="form-control mb-2"
    />
    <input
      type="text"
      name="NumeroInterior"
      placeholder="Numero Interior"
      class="form-control mb-2"
    />
    <input
      type="text"
      name="Telefono"
      placeholder="Telefono"
      class="form-control mb-2"
    />
    <input
      type="text"
      name="Email"
      placeholder="Email"
      class="form-control mb-2"
    />
    <input
      type="text"
      name="CURP"
      placeholder="CURP"
      class="form-control mb-2"
    />

 <label for="centroTrabajo">Centro de Trabajo (Para seleccionar varios, mantenga pulsado 'Ctrl')</label>
    <div class="form-group mb-2">
     <select class="form-control" id="centroTrabajo" name="CentroTrabajoID">
       @foreach ($centrosTrabajo as $centroTrabajo)
        <option value='{{$centroTrabajo->id}}'>{{$centroTrabajo->Nombre}}</option>
       @endforeach


     </select>
     </div>

    <input
      type="text"
      name="TipoPlaza"
      placeholder="Tipo de plaza"
      class="form-control mb-2"
    />
    <input
      type="date"
      name="FechaIngreso"
      placeholder="Fecha de Ingreso"
      class="form-control mb-2"
    />
    <input
      type="text"
      name="RFC"
      placeholder="RFC"
      class="form-control mb-2"
    />

    <div class="form-group mb-2">
     <label for="estado">Estado</label>
     <select class="form-control" id="estado" name="Estado">
       <option>Activo</option>
       <option>Inactivo</option>
     </select>
   </div>

  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection
