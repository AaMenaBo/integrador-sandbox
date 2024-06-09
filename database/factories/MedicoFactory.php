<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medico>
 */
class MedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name =  preg_split("/[\s,]+/", $this->faker->name());
        return [
            'codigo'    => $this->faker->randomNumber(9, true),
            'nombre'    => $name[0],
            'apellido1' => $name[1],
            'apellido2' => $name[1],
            'telefono'  => $this->faker->randomNumber(8, true),
            'direccion' => $this->faker->address(),
            'email'     => $this->faker->email()
        ];
    }
}
