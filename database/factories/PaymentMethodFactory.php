<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PaymentMethod;

class PaymentMethodFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['efectivo', 'tarjeta', 'transferencia']),
            'description' => $this->faker->sentence()
        ];
    }
}
