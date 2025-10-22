<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    protected $model = Room::class;

    public function definition(): array
    {
        // Asegurar que haya al menos un RoomType; si no, crear uno
        $roomTypeId = RoomType::count()
            ? RoomType::inRandomOrder()->first()->id
            : RoomType::factory()->create()->id;

        return [
            'room_type_id' => $roomTypeId, // relación
            'number' => $this->faker->unique()->numerify('###'), // número de habitación
            'floor' => $this->faker->numberBetween(1, 10),
            // valor como decimal con 2 decimales; rango realista
            'value' => $this->faker->randomFloat(2, 50000, 1000000),
            'numpeople' => $this->faker->numberBetween(1, 6),
        ];
    }
}