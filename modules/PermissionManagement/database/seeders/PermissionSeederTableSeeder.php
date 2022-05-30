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

        Permission::create(['name' => 'dashboard.index']);
        Permission::create(['name' => 'menu.index']);
        Permission::create(['name' => 'route.index']);
        Permission::create(['name' => 'role.index']);
        Permission::create(['name' => 'permission.index']);
    }
}
