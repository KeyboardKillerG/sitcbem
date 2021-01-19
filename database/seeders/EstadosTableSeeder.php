<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estado;

class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //



        Estado::truncate(); // Evita duplicar datos
        $estado = new Estado();
        $estado->Estado = "Activo";
        $estado->Descripcion = "Activo";
        $estado->save();

        $estado = new Estado();
        $estado->Estado = "Inactivo";
        $estado->Descripcion = "Inactivo";
        $estado->save();

        $estado = new Estado();
        $estado->Estado = "Pausado";
        $estado->Descripcion = "Pausado";
        $estado->save();

    }
}
