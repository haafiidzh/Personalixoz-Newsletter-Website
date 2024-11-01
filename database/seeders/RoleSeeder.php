<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // // CARA BIASA
        // Role::create(['name' => 'Developer']);
        // Role::create(['name' => 'Admin']);
        // Role::create(['name' => 'User']);

        // CARA EFEKTIF
        $roles = [
            ['name' => 'Developer', 'guard_name' => 'web'],
            ['name' => 'Admin', 'guard_name' => 'web'],
            ['name' => 'User', 'guard_name' => 'web'],
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate($role);
        }

    }
}
