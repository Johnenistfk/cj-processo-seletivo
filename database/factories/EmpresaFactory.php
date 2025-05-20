<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmpresaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'valor_boleto' => $this->faker->numberBetween(1000, 10000),
            'valor_cartao' => $this->faker->numberBetween(1000, 10000),
            'saldo_credito' => $this->faker->numberBetween(0, 50000),
            'proxima_recorrencia' => $this->faker->dateTimeBetween('now', '+1 month'),
        ];
    }
}
