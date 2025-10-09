<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PaymentMethod;
use App\Models\Registration;

class InvoiceFactory extends Factory
{

    public function definition(): array
    {
        return [
            'registration_id' => Registration::inRandomOrder()->first()->id,// Relación
            'payment_method_id' => PaymentMethod::inRandomOrder()->first()->id,// Relación
            'date' => $this->faker->date(),
            'total' => $this->faker->randomFloat(),
            'estado' => '1'
        ];
    }
}
