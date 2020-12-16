@extends('bootstrap')
@section('master')
<form method="POST" action="{{ route('afiliado.insertar') }}">
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
    name="ApellidoP"
    placeholder="Apellido Paterno"
    class="form-control mb-2"
  />
  <input
    type="date"
    name="FechaNacimiento"
    placeholder="Fecha Nacimiento"
    class="form-control mb-2"
  />
  <p>Genero:</p>
   <input type="radio" id="male" name="Genero" value="male">
   <label for="male">Hombre</label><br>
   <input type="radio" id="female" name="Genero" value="female">
   <label for="female">Mujer</label><br>
   <input type="radio" id="other" name="Genero" value="other">
   <label for="other">Puto</label>

  <p>Estado Civil:</p>
   <input type="radio" id="female" name="EstadoCivil" value="Casado">
   <label for="female">Casado</label><br>
   <input type="radio" id="other" name="EstadoCivil" value="Soltero">
   <label for="other">Soltero</label>

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
    <input
      type="text"
      name="CentroTrabajo"
      placeholder="Centro de trabajo"
      class="form-control mb-2"
    />
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


  <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection
