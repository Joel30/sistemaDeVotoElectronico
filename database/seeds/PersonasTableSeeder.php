<?php

use Illuminate\Database\Seeder;
use App\Persona;

class PersonasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Persona::create([
            "ci" => "80706050",
            "nombre" => "Jesus",
            "apellidoP" => "Fernandez",
            "apellidoM" => "Ruiz",
            "direccion" => "Las Banderas",
            "fechaNacimiento" => "1990-01-01"
        ]);
    }
}
