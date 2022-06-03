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
        Permission::create(['name' => 'option']);

        // dashboard
        Permission::create(['name' => 'dashboard.index']);

        // menu group
        Permission::create(['name' => 'menu.index']);
        Permission::create(['name' => 'menu.store']);
        Permission::create(['name' => 'menu.update']);
        Permission::create(['name' => 'menu.destroy']);

        // menu items
        Permission::create(['name' => 'menu.item.index']);
        Permission::create(['name' => 'menu.item.store']);
        Permission::create(['name' => 'menu.item.update']);
        Permission::create(['name' => 'menu.item.destroy']);

        // route management
        Permission::create(['name' => 'route.index']);
        Permission::create(['name' => 'route.store']);
        Permission::create(['name' => 'route.update']);
        Permission::create(['name' => 'route.destroy']);

        // role management
        Permission::create(['name' => 'role.index']);
        Permission::create(['name' => 'role.store']);
        Permission::create(['name' => 'role.update']);
        Permission::create(['name' => 'role.destroy']);

        // permission management
        Permission::create(['name' => 'permission.index']);
        Permission::create(['name' => 'permission.store']);
        Permission::create(['name' => 'permission.update']);
        Permission::create(['name' => 'permission.destroy']);
    }
}
