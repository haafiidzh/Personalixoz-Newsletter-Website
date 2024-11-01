<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $developerPermission = [
            'view-dashboard',
            'view-users',
            'detail-users',
            'create-users',
            'edit-users',
            'delete-users',
            'view-roles',
            'create-roles',
            'edit-roles',
            'delete-roles',
            'view-news',
            'create-news',
            'edit-news',
            'delete-news',
            'view-news-category',
            'create-news-category',
            'edit-news-category',
            'delete-news-category',
            'detail-news-category',
            'view-permission',
            'create-permission',
            'edit-permission',
            'delete-permission',
        ];

        $adminPermission = [
            'view-dashboard',
            'view-users',
            'create-users',
            'edit-users',
            'delete-users',
            'view-news',
            'create-news',
            'edit-news',
            'delete-news',
            'view-news-category',
            'create-news-category',
            'edit-news-category',
            'delete-news-category',
            'detail-news-category'
        ];

        $userPermission = [
            'view-dashboard',
            'view-news',
            'create-news',
            'edit-news',
            'delete-news',
        ];

        $developerRole = Role::where('name','Developer')->first();
        $developerRole->syncPermissions($developerPermission);

        $adminRole = Role::where('name','Admin')->first();
        $adminRole->syncPermissions($adminPermission);

        $userRole = Role::where('name','User')->first();
        $userRole->syncPermissions($userPermission);

    }
}
