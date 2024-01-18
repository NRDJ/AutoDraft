<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'ventas.autodraft@gmail.com',
            'password' => Hash::make('s6D.1&8^&9.<'), // Hash the password
        ]);

        User::factory()->create([
            'name' => 'nico',
            'email' => 'nriedeldj@gmail.com',
            'password' => Hash::make('0Y:R056B~qvC'), // Hash the password
        ]);
    }
}
