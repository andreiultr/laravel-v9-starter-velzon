<?php

namespace Modules\PermissionManagement\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Permission;

class PermissionSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");

        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'general']);
        Permission::create(['name' => 'setting']);

        // dashboard
        Permission::create(['name' => 'dashboard.index']);

        // General Setting
        Permission::create(['name' => 'setting.index']);
        Permission::create(['name' => 'setting.update']);

        // User Management
        Permission::create(['name' => 'user.index']);
        Permission::create(['name' => 'user.store']);
        Permission::create(['name' => 'user.update']);
        Permission::create(['name' => 'user.destroy']);

        // User Profile
        Permission::create(['name' => 'profile.index']);

        // Menu Management Group
        Permission::create(['name' => 'menu.index']);
        Permission::create(['name' => 'menu.store']);
        Permission::create(['name' => 'menu.update']);
        Permission::create(['name' => 'menu.destroy']);

        // Menu Management Items
        Permission::create(['name' => 'menu.item.index']);
        Permission::create(['name' => 'menu.item.store']);
        Permission::create(['name' => 'menu.item.update']);
        Permission::create(['name' => 'menu.item.destroy']);

        // Route Management
        Permission::create(['name' => 'route.index']);
        Permission::create(['name' => 'route.store']);
        Permission::create(['name' => 'route.update']);
        Permission::create(['name' => 'route.destroy']);

        // Role Management
        Permission::create(['name' => 'role.index']);
        Permission::create(['name' => 'role.store']);
        Permission::create(['name' => 'role.update']);
        Permission::create(['name' => 'role.destroy']);

        // Permission Management
        Permission::create(['name' => 'permission.index']);
        Permission::create(['name' => 'permission.store']);
        Permission::create(['name' => 'permission.update']);
        Permission::create(['name' => 'permission.destroy']);
    }
}
