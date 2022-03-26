<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("areas")->insert([
            [
                "nombre" => "San Salvador",
                "telefono" => "2334-6755",
                "codigoSucursal" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nombre" => "San Miguel",
                "telefono" => "3422-8755",
                "codigoSucursal" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nombre" => "Santa Tecla",
                "telefono" => "4370-2266",
                "codigoSucursal" => 3,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "nombre" => "Morazan",
                "telefono" => "6588-3250",
                "codigoSucursal" => 4,
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
