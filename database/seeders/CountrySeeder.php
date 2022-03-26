<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("countries")->insert([
            [
                "country_name" => "Jamaica",
                "country_continent" => "América",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "country_name" => "México",
                "country_continent" => "América",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "country_name" => "Nicaragua",
                "country_continent" => "América",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "country_name" => "Panamá",
                "country_continent" => "América",
                "created_at" => now(),
                "updated_at" => now(),
            ]
        ]);
    }
}
