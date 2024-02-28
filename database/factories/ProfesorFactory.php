<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{


    private function getDNI(): string {
        $num = rand(0, 99999999);
        $letraDNI = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];
        return sprintf("%08d", $num) . $letraDNI[$num%23];
    }



    public function definition(): array
    {




        return [
            'nombre'=>fake()->name(),
            'apellidos'=>fake()->lastName(),
            'departamento'=>fake()->randomElement(['informatica', 'comercio', 'imagen']),
            'email'=>fake()->email(),
            'dni'=>$this->getDni()

        ];
    }
}
