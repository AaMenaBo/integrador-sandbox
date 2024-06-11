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

        //Crea registros de prueba
        Medico::factory(100)->create();
        //Crea un registro real
        $med = new Medico;
        $med->codigo = 5_0446_0268;
        $med->nombre = 'Aaron';
        $med->apellido1 = 'Mena';
        $med->apellido2 = 'Bogarin';
        $med->telefono = 8458_6727;
        $med->direccion = 'Barrio Buenos Aires';
        $med->email = 'aamenabo@est.utn.ac.cr';
        $med->save();
    }
}
