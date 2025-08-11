<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'role' => 'super_admin' // Pokud chcete nastavit i roli
        ]);

        // Můžete přidat i další uživatele pro testování
        // User::factory(10)->create();
    }
}
