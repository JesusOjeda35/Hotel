<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Client;
class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        $clients = Client::factory()->count(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
