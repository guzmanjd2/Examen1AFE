<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("sucursals")->insert([
            [
                "nombre" => "Sucursal, San Salvador",
                "direccion" => "San Salvador",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nombre" => "Sucursal, San Miguel",
                "direccion" => "San Miguel",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nombre" => "Sucursal, Santa Tecla",
                "direccion" => "Santa Tecla",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nombre" => "Sucursal, Morazan",
                "direccion" => "Morazan",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
