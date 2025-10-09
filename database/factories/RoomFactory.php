<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RoomType;
use App\Models\Room;

class RoomFactory extends Factory
{

    public function definition(): array
    {
        $value = $this->faker->randomFloat(5, 50000, 100000, 250000, 500000, 1000000);
        return [
            'room_type_id' => RoomType::inRandomOrder()->first()->id,// Relación
            'number' => $this->faker->number(),
            'floor' => $this->faker->floor(),
            'value' => $value,
            'numpeople' => $this->faker->numberBetween(1,6)
        ];
    }
}
