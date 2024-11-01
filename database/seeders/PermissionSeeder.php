<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view-dashboard',
            'view-users',
            'create-users',
            'edit-users',
            'delete-users',
            'detail-users',

            'view-roles',
            'create-roles',
            'edit-roles',
            'delete-roles',

            'view-permission',
            'create-permission',
            'edit-permission',
            'delete-permission',

            'view-news',
            'create-news',
            'edit-news',
            'delete-news',
            'detail-news',

            'view-news-category',
            'create-news-category',
            'edit-news-category',
            'delete-news-category',
            'detail-news-category'
        ];

        foreach($permissions as $permission) {
            Permission::updateOrCreate(['name' => $permission, 'guard_name' => 'web']);
        };
    }
}
