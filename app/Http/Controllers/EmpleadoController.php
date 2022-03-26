<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;

class EmpleadoController extends Controller
{
    public function index()
    {
        $data = [
            array(
                "nombre" => "Juan Perez",
                "edad" => 23,
                "sueldoBase" => 1000.5,
                "codigoArea" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ),
            array(
                "nombre" => "Jose Guzman",
                "edad" => 23,
                "sueldoBase" => 1000.5,
                "codigoArea" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            )
        ];
        return view("/empleado/index")->with("data", $data);
    }
}
