<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SimuladorCreditos>
 */
class SimuladorCreditosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nombre" => $this->faker->name(),
            "mes" => $this->faker->monthName(),
            "cuota" => $this->faker->Integer():
            "intereses" => $this->faker->numeric(),
            "capital" => $this->faker->numeric(),
            "saldopendiente" => $this->faker->numeric(),
        ];
    }
}
