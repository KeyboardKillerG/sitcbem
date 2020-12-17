@extends('bootstrap')

@section('master')
  <h1>Editar</h1>
  @if (session('mensaje'))
      <div class="alert alert-success">
          {{ session('mensaje') }}
      </div>
  @endif
  <form action="" method="POST">
    @method('PUT')
    @csrf

    <input
      type="text"
      name="Nombre"
      placeholder="Nombre"
      class="form-control mb-2 w-50"
      value="{{ $afiliado[0]->Nombre }}"
    />
    <input
      type="text"
      name="ApellidoP"
      placeholder="Apellido Paterno"
      class="form-control mb-2 w-50"
    />
    <input
      type="text"
      name="ApellidoP"
      placeholder="Apellido Paterno"
      class="form-control mb-2 w-50"
    />
    <input
      type="date"
      name="FechaNacimiento"
      placeholder="Fecha Nacimiento"
      class="form-control mb-2 w-25"
    />
    <label for='genero'>Genero:</label>
    <select class="form-control mb-2 w-25" name="Genero" id='genero'>
      <option>Hombre</option>
      <option>Mujer</option>
      <option>Otro</option>
    </select>

    <label for='edocivil'>Estado Civil:</label>
    <select class="form-control mb-2 w-25" name="EstadoCivil" id='edocivil'>
      <option>Casado</option>
      <option>Soltero</option>
    </select>

    <label for='cp'>Codigo Postal:</label>
     <input
     id="cp"
      type="number"
      name="CodigoPostal"
      placeholder="202020"
      class="form-control mb-2 w-25"
      />

      <input
        type="text"
        name="Colonia"
        placeholder="Colonia"
        class="form-control mb-2 w-25"
      />
      <input
        type="text"
        name="NumeroExterior"
        placeholder="Numero Exterior"
        class="form-control mb-2  w-25"
      />
      <input
        type="text"
        name="NumeroInterior"
        placeholder="Numero Interior"
        class="form-control mb-2  w-25"
      />
      <input
        type="text"
        name="Telefono"
        placeholder="Telefono"
        class="form-control mb-2 w-25"
      />
      <input
        type="text"
        name="Email"
        placeholder="Email"
        class="form-control mb-2 w-25"
      />
      <input
        type="text"
        name="CURP"
        placeholder="CURP"
        class="form-control mb-2  w-25"
      />
      <input
        type="text"
        name="CentroTrabajo"
        placeholder="Centro de trabajo"
        class="form-control mb-2 w-25"
      />
      <input
        type="text"
        name="TipoPlaza"
        placeholder="Tipo de plaza"
        class="form-control mb-2  w-25"
      />
      <input
        type="date"
        name="FechaIngreso"
        placeholder="Fecha de Ingreso"
        class="form-control mb-2 w-25"
      />
      <input
        type="text"
        name="RFC"
        placeholder="RFC"
        class="form-control mb-2 w-25"
      />
    <button class="btn btn-info btn-block" type="submit">Editar</button>
  </form>
@endsection
