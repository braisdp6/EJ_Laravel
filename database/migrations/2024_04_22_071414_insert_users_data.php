<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Insertar varios registros en la tabla 'users'
        DB::table('users')->insert([
            [
                'name' => 'Ana García',
                'phone' => '634567890',
                'email' => 'ana@email.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Carlos Sánchez',
                'phone' => '657894321',
                'email' => 'carlos@email.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password456'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Laura Fernández',
                'phone' => '689012345',
                'email' => 'laura@email.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password789'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pedro Martínez',
                'phone' => '612345678',
                'email' => 'pedro@email.com',
                'email_verified_at' => now(),
                'password' => bcrypt('passwordABC'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sofía Rodríguez',
                'phone' => '623456789',
                'email' => 'sofia@email.com',
                'email_verified_at' => now(),
                'password' => bcrypt('passwordXYZ'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('users')->whereIn('email', [
            'ana@email.com',
            'carlos@email.com',
            'laura@email.com',
            'pedro@email.com',
            'sofia@email.com'
        ])->delete();
    }
};
