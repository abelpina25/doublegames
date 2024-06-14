<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // utilizador admin para inserir e gerir os jogos
        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('password'),
        ]);

        // utilizador para comprar e jogar os jogos
        \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'user@email.com',
            'password' => bcrypt('password'),
        ]);
    }
}
