<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\amz>
 */
class AmzFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->firstName(),
            'apellido'=>$this->faker->lastName(),
            'fecha_nacimiento'=>$this->faker->dateTimeBetween(''),
            'year_alta'=>$this->faker->randomNumber(),
            'estado'=>$this->boolval(),
            //
        ];
    }
}
