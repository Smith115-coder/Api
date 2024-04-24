<?php

namespace Database\Factories;

use App\Models\Expense;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expense::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(), // Asigna un ID de usuario existente
            'amount' => $this->faker->randomFloat(2, 10, 1000), // Monto aleatorio entre 10 y 1000
            'description' => $this->faker->sentence(), // Descripción aleatoria
            'date' => $this->faker->dateTimeBetween('-1 year', 'now'), // Fecha aleatoria en el último año
        ];
    }
}
