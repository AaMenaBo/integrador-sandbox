<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medico;

class MedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $med = new Medico;
        $med->codigo = 1_1234_1235;
        $med->nombre = 'NoMBre2';
        $med->apellido1 = 'apedilLidO2';
        $med->apellido2 = 'apedilLidO2';
        $med->telefono = 1234_1234;
        $med->direccion = 'Direccion de prueba2';
        $med->email = 'email@test.com2';
        $med->save();


        Medico::factory(10)->create();
    }
}
