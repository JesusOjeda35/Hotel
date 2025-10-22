<?php

namespace Database\Factories;
use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'documentNumber' => $this->faker->documentNumber(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'state' =>  $this->faker->boolean(),
            'registeredBy' => $this->faker->name(),
        ];
    }
}
