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
            'checkindate' => $this->faker->format('Y-m-d'),
            'checkoutdate' => $this->faker->format('Y-m-d'),
            'checkintime' =>  $this->faker->time('H:i:s'),
            'checkouttime' =>  $this->faker->time('H:i:s')
        ];
    }
}
