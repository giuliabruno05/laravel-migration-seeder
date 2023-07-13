<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RailwayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake()-> word(),
            'stazione_di_partenza' => fake() -> city(),
            'stazione_di_arrivo' => fake() -> city(),
            'orario_di_partenza' => fake() -> time(),
            'orario_di_arrivo' => fake() -> time(),
            'codice_treno' => fake() -> randomNumber(5, true),
            'numero_carrozze' => fake() -> randomNumber(1, false),
            'in_orario' => fake() -> boolean(),
            'cancellato' => fake() -> boolean()
        ];
    }
}
