<?php

namespace Database\Seeders;

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
            'access dashboard',
            'impersonate',
            'view users',
            'create users',
            'update users',
            'delete users',
            'view roles',
            'create roles',
            'update roles',
            'delete roles',
            'view permissions',
            'create permissions',
            'update permissions',
            'delete permissions',
            'add post',
            'store post',
            'edit post',
            'update post',
            'delete post',
            'edit experience',
            'update experience',
            'delete experience',
            'store experience',
            'all post',
            'my experience',
            'all hero',
            'update hero',
            'all service',
            'add service',
            'store service',
            'edit service',
            'update service',
            'delete service',
            'all work',
            'add work',
            'store work',
            'edit work',
            'update work',
            'delete work',
            'all experience',
            'all education',
            'add skill',
            'store skill',
            'all skill',
            'update skill',
            'edit skill',
            'delete skill',
            'add testimony',
            'store testimony',
            'all testimony',
            'edit testimony',
            'update testimony',
            'delete testimony',
            'all setting',
            'update setting',
            'all contact',
            'delete contact',
            'update comment',
            'document uploads',
            'document upload',
            'download byshortname',
            'documents destroy',
            'documents edit',
            'documents update',
            'portfolio dash',
            'blog approved',
        ];


        foreach ($permissions as $permission) {
            Permission::query()->updateOrCreate([
                'name' => $permission,
            ]);
        }

    }
}
