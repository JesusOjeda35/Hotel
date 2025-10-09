<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;
use App\Models\Room;
use App\Models\Client;

class RegistrationFactory extends Factory
{

    public function definition(): array
    {
        return [
            //'employee_id' => Employee::factory(),// Relación
            //'room_id' => Room::factory(),// Relación
            //'client_id' => Client::factory(),// Relación
            'employee_id' => Room::inRandomOrder()->first()->id,
            'room_id' => Room::inRandomOrder()->first()->id,
            'client_id' => Room::inRandomOrder()->first()->id,
            'checkindate' => $this->faker->checkindate(),
            'checkoutdate' => $this->faker->checkoutdate(),
            'checkintime' => $this->faker->checkintime(),
            'checkouttime' => $this->faker->checkouttime()
        ];
    }
}
