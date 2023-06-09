<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bug>
 */
class BugFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'descripcion'=>fake()->sentence(5),
            'codigo'=>fake()->sentence(5),
            'solucion'=>fake()->sentence(10),
            'estado'=>fake()->randomDigit([1,2,3,4,5]),
            'plataforma'=>fake()->sentence(1),
            
        ];
    }
}
