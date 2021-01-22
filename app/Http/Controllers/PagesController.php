<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afiliado;
use App\Models\CentroTrabajo;
use App\Models\Coordinacion;
use App\Models\Estado;

class PagesController extends Controller
{
    public function inicio(){
      return view('welcome');
    }

    public function agregarAfiliado(){

      $centrosTrabajo = CentroTrabajo::all();
      $estados = Estado::all();

      return view('Afiliados.agregarAfiliado', compact('centrosTrabajo', 'estados'));

    }

    public function insertarAfiliado(Request $request){
      $nuevoAfiliado = new Afiliado;
      $nuevoAfiliado->Nombre = $request->Nombre;
      $nuevoAfiliado->ApellidoP = $request->ApellidoP;
      $nuevoAfiliado->ApellidoM = $request->ApellidoM;
      $nuevoAfiliado->FechaNacimiento = $request->FechaNacimiento;
      $nuevoAfiliado->Genero = $request->Genero;
      $nuevoAfiliado->EstadoCivil = $request->EstadoCivil;
      $nuevoAfiliado->CodigoPostal = $request->CodigoPostal;
      $nuevoAfiliado->Colonia = $request->Colonia;
      $nuevoAfiliado->Calle = $request->Calle;
      $nuevoAfiliado->NumeroInterior = $request->NumeroInterior;
      $nuevoAfiliado->NumeroExterior = $request->NumeroExterior;
      $nuevoAfiliado->Telefono = $request->Telefono;
      $nuevoAfiliado->Email = $request->Email;
      $nuevoAfiliado->RFC = $request->RFC;
      $nuevoAfiliado->CURP = $request->CURP;
      $nuevoAfiliado->Foto = 'URL';
      $nuevoAfiliado->CentroTrabajoID = $request->CentroTrabajoID;
      $nuevoAfiliado->TipoPlaza = $request->TipoPlaza;
      $nuevoAfiliado->FechaIngreso = $request->FechaIngreso;
      $nuevoAfiliado->EstadoID = 1;


      $nuevoAfiliado->save();
      return back()->with('mensaje', 'Nota agregada');
    }

    public function mostrarAfiliados(){

       $afiliados = Afiliado::all();
       $centrosTrabajo = CentroTrabajo::all();

       return view('Afiliados.verAfiliados', compact('afiliados','centrosTrabajo'));
     }

    public function eliminarAfiliado($id){

      $afiliadoEliminar = Afiliado::findOrFail($id)->delete();

      return back()->with('mensaje', 'Afiliado Eliminado');
    }

    public function editarAfiliado($id){
      $afiliado = Afiliado::findOrFail($id);
      $centrosTrabajo = CentroTrabajo::all();
      $estados = Estado::all();

      return view('Afiliados.editarAfiliado', compact('afiliado','centrosTrabajo','estados'));
    }

    public function updateAfiliado(Request $request , $id){
      $Afiliado = Afiliado::findOrFail($id);
      $Afiliado->Nombre = $request->Nombre;
      $Afiliado->ApellidoP = $request->ApellidoP;
      $Afiliado->ApellidoM = $request->ApellidoM;
      $Afiliado->FechaNacimiento = $request->FechaNacimiento;
      $Afiliado->Genero = $request->Genero;
      $Afiliado->EstadoCivil = $request->EstadoCivil;
      $Afiliado->CodigoPostal = $request->CodigoPostal;
      $Afiliado->Colonia = $request->Colonia;
      $Afiliado->Calle = $request->Calle;
      $Afiliado->NumeroInterior = $request->NumeroInterior;
      $Afiliado->NumeroExterior = $request->NumeroExterior;
      $Afiliado->Telefono = $request->Telefono;
      $Afiliado->Email = $request->Email;
      $Afiliado->RFC = $request->RFC;
      $Afiliado->CURP = $request->CURP;
      $Afiliado->Foto = 'URL';
      $Afiliado->CentroTrabajoID = $request->CentroTrabajoID;
      $Afiliado->TipoPlaza = $request->TipoPlaza;
      $Afiliado->FechaIngreso = $request->FechaIngreso;
      $Afiliado->EstadoID = 1;


      $Afiliado->save();
      return back()->with('mensaje', 'Datos editados');
    }

    //CENTROS TRABAJO

    public function agregarCentroTrabajo(){
      $coordinaciones = Coordinacion::all();

      return view('CentrosTrabajo.agregarCentro', compact('coordinaciones'));
    }

    public function insertarCentroTrabajo(Request $request){
      $centroTrabajo = new CentroTrabajo;
      $centroTrabajo->Nombre = $request->Nombre;
      $centroTrabajo->Telefono = $request->Telefono;
      $centroTrabajo->CoordinacionID = $request->CoordinacionID;


      $centroTrabajo->save();
      return back()->with('mensaje', 'Centro agregado');
    }

    public function mostrarCentrosTrabajo(){

       $centros = CentroTrabajo::all();
       $Coordinacionx = Coordinacion::all();
       return view('CentrosTrabajo.verCentrosTrabajo', compact('centros','Coordinacionx'));
     }

     public function eliminarCentroTrabajo($id){

       $centrooEliminar = CentroTrabajo::findOrFail($id)->delete();

       return back()->with('mensaje', 'Centro Eliminado');
     }

     public function editarCentroTrabajo($id){
      $centro = CentroTrabajo::findOrFail($id);
      $coordi = Coordinacion::findOrFail($centro->CoordinacionID);
      $coordinaciones = Coordinacion::all();

      return view('CentrosTrabajo.editarCentroTrabajo', compact('centro','coordi','coordinaciones'));
    }

     public function updateCentroTrabajo(Request $request , $id){
       $centroTrabajo = CentroTrabajo::findOrFail($id);
       $centroTrabajo->Nombre = $request->Nombre;
       $centroTrabajo->Telefono = $request->Telefono;
       $centroTrabajo->CoordinacionID = $request->CoordinacionID;

       $centroTrabajo->save();
       return back()->with('mensaje', 'Datos editados');
     }

     //Coordinaciones

     public function agregarCoordinacion(){
       return view('Coordinaciones.agregarCoordinacion');
     }

     public function insertarCoordinacion(Request $request){
       $coordinacion = new Coordinacion;
       $coordinacion->Nombre = $request->Nombre;
       $coordinacion->Telefono = $request->Telefono;

       $coordinacion->save();
       return back()->with('mensaje', 'Coordinacion agregada');
     }

     public function mostrarCoordinaciones(){

        $coordinaciones = Coordinacion::all();

        return view('Coordinaciones.verCoordinaciones', compact('coordinaciones'));
      }

      public function eliminarCoordinacion($id){

        $coordinacionEliminar = Coordinacion::findOrFail($id)->delete();

        return back()->with('mensaje', 'Coordinacion Eliminada');
      }

      public function editarCoordinacion($id){
        $coordinacion = Coordinacion::findOrFail($id);
        return view('Coordinaciones.editarCoordinacion', compact('coordinacion'));
      }

      public function updateCoordinacion(Request $request , $id){
        $coordinacion = Coordinacion::findOrFail($id);
        $coordinacion->Nombre = $request->Nombre;
        $coordinacion->Telefono = $request->Telefono;

        $coordinacion->save();
        return back()->with('mensaje', 'Datos editados');
      }

}
