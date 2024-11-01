<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Biodata;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data user dan role yang akan ditambahkan
        $users = [
            [
                'name' => 'Developer',
                'email' => 'developer@app.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'phone' => '081234567890',
                'role' => 'Developer',
                'biodata' => [
                    'fullname' => 'Developer Real',
                    'gender' => 'Laki-Laki',
                    'place_birth' => 'Sukoharjo',
                    'date_birth' => '1995-07-21',
                    'address' => 'Sukoharjo',
                ],
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@app.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'phone' => '081234567891',
                'role' => 'Admin',
                'biodata' => [
                    'fullname' => 'Admin Real',
                    'gender' => 'Perempuan',
                    'place_birth' => 'Solo',
                    'date_birth' => '1990-08-15',
                    'address' => 'Solo',
                ],
            ],
            [
                'name' => 'User',
                'email' => 'user@app.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'phone' => '081234567892',
                'role' => 'User',
                'biodata' => [
                    'fullname' => 'User Real',
                    'gender' => 'Laki-Laki',
                    'place_birth' => 'Surakarta',
                    'date_birth' => '1992-12-25',
                    'address' => 'Surakarta',
                ],
            ],
        ];

        foreach ($users as $userData) {
            // Buat user baru di tabel users
            $user = User::updateOrCreate([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password'],
                'email_verified_at' => $userData['email_verified_at'],
                'phone' => $userData['phone'],
            ]);

            // Buat biodata untuk user baru
            Biodata::updateOrCreate([
                'user_id' => $user->id,
                'fullname' => $userData['biodata']['fullname'],
                'gender' => $userData['biodata']['gender'],
                'place_birth' => $userData['biodata']['place_birth'],
                'date_birth' => $userData['biodata']['date_birth'],
                'address' => $userData['biodata']['address'],
            ]);

            // Assign role ke user
            $user->assignRole($userData['role']);
        }
    }
}
