<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("empleados")->insert([
            [
                "nombre" => "Juan Perez",
                "edad" => 23,
                "sueldoBase" => 1000.5,
                "codigoArea" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nombre" => "Jose Guzman",
                "edad" => 30,
                "sueldoBase" => 700.5,
                "codigoArea" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nombre" => "Maria Rosales",
                "edad" => 34,
                "sueldoBase" => 1200.5,
                "codigoArea" => 3,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nombre" => "Karla Alvarez",
                "edad" => 27,
                "sueldoBase" => 1000.5,
                "codigoArea" => 4,
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
