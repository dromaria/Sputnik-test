<?php

namespace Database\Seeders;

use App\Models\Place;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'login' => 'Test Admin',
            'password' => 'password',
            'role_id' => 2
        ]);

        Place::factory(10)->create();
    }
}
