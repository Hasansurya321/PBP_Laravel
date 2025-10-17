<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat atau perbarui user default
        User::updateOrCreate(
            ['email' => 'test@example.com'], // kunci unik
            [
                'name'              => 'Test User',
                'password'          => Hash::make('password'), // ubah jika perlu
                'email_verified_at' => now(),
            ]
        );
    }
}
