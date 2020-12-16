@extends('bootstrap')
@section('master')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($afiliados as $item)
    <tr>
      <th scope="row">{{ $item->AfiliadoID }}</th>
      <td>{{ $item->Nombre }}</td>
      <td><form action="{{ route('afiliado.eliminar', $item->AfiliadoID) }}" class="d-inline" method="POST">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
          </form>
         <button class="btn btn-sm btn-info" type="button" name="delete">Actualizar</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
