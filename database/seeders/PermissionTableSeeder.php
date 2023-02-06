<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',

           'client-list',
           'client-create',
           'client-edit',
           'client-delete',

           'polls-list',
           'polls-create',
           'polls-edit',
           'polls-delete',

           'blog-list',
           'blog-create',
           'blog-edit',
           'blog-delete',

           'service-list',
           'service-create',
           'service-edit',
           'service-delete',

           'package-list',
           'package-create',
           'package-edit',
           'package-delete',

           'project-list',
           'project-create',
           'project-edit',
           'project-delete',

           'team-list',
           'team-create',
           'team-edit',
           'team-delete',

           'user-list',
           'user-create',
           'user-edit',
           'user-delete',



           'list1-list',
           'list1-create',
           'list1-edit',
           'list1-delete',

           'list2-list',
           'list2-create',
           'list2-edit',
           'list2-delete',

           'visits-list',
        
        ];

        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
