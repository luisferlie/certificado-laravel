<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{


    private function getDni(){

            $num = rand(0, 99999999);
            $letras = ["TRWAGMYFPDXBNJZSQVHLCKE"];
            $numero=fake()->randomNumber(8);
            $letra =$letras[$numero%23];
            $dni="$numero-$letra";
            return $dni;
        }



    public function definition(): array
    {




        return [
            'nombre'=>fake()->name(),
            'apellidos'=>fake()->lastName(),
            'departamento'=>fake()->randomElement(['informatica', 'comercio', 'imagen']),
            'email'=>fake()->email(),
            'dni'=>fake()->$this->getDni();

        ];
    }
}
