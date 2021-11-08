<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EntradaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(10),
            'subtitulo' => $this->faker->sentence(),
            'cuerpo' => $this->faker->text(400),
        ];
    }
}
