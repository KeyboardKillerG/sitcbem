<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afiliado;

class PagesController extends Controller
{
    public function inicio(){
      return view('welcome');
    }

    public function agregarAfiliado(){
      return view('agregarAfiliado');
    }

    public function insertarAfiliado(Request $request){
      $nuevoAfiliado = new Afiliado;
      $nuevoAfiliado->Nombre = $request->Nombre;
      $nuevoAfiliado->ApellidoP = 'Apellido';
      $nuevoAfiliado->ApellidoM = 'Apellido';
      $nuevoAfiliado->FechaNacimiento = '2005-01-15';
      $nuevoAfiliado->Genero = '0';
      $nuevoAfiliado->EstadoCivil = '1';
      $nuevoAfiliado->CodigoPostal = 12345;
      $nuevoAfiliado->Colonia = 'Colonia';
      $nuevoAfiliado->Calle = 'Calle';
      $nuevoAfiliado->NumeroInterior = '123';
      $nuevoAfiliado->NumeroExterior = 'abc';
      $nuevoAfiliado->Telefono = '12345';
      $nuevoAfiliado->Email = 'abc@def.com';
      $nuevoAfiliado->RFC = 'abc123';
      $nuevoAfiliado->CURP = '123abc';
      $nuevoAfiliado->Foto = 'foto';
      $nuevoAfiliado->CentroTrabajoID = 1;
      $nuevoAfiliado->TipoPlaza = 'Plaza';
      $nuevoAfiliado->FechaIngreso = '2005-01-15';
      $nuevoAfiliado->EstadoID = 1;


      $nuevoAfiliado->save();
      return back()->with('mensaje', 'Nota agregada');
    }

    public function mostrarAfiliados(){

       $afiliados = Afiliado::all();

       return view('mostrarAfiliados', compact('afiliados'));
     }

    public function eliminar($id){

      $afiliadoEliminar = Afiliado::where('AfiliadoID',$id)->delete();

      return back()->with('mensaje', 'Nota Eliminada');
    }

}
