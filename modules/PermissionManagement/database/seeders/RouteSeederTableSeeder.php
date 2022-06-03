<?php

namespace Modules\PermissionManagement\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\PermissionManagement\app\Models\Route;

class RouteSeederTableSeeder extends Seeder
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

        // Dashboard
        Route::insert([
            [
                'route' => 'dashboard.index',
                'permission_name' => 'dashboard.index'
            ],
        ]);

        // User Management
        Route::insert([
            [
                'route' => 'user-management.index',
                'permission_name' => 'user-management.index'
            ],
            [
                'route' => 'user-management.store',
                'permission_name' => 'user-management.store'
            ],
            [
                'route' => 'user-management.update',
                'permission_name' => 'user-management.update'
            ],
            [
                'route' => 'user-management.destroy',
                'permission_name' => 'user-management.destroy'
            ],
        ]);

        // Menu Group Management
        Route::insert([
            [
                'route' => 'menu.index',
                'permission_name' => 'menu.index'
            ],
            [
                'route' => 'menu.store',
                'permission_name' => 'menu.store'
            ],
            [
                'route' => 'menu.update',
                'permission_name' => 'menu.update'
            ],
            [
                'route' => 'menu.destroy',
                'permission_name' => 'menu.destroy'
            ],
        ]);

        // Menu Item Management
        Route::insert([
            [
                'route' => 'menu.item.index',
                'permission_name' => 'menu.item.index'
            ],
            [
                'route' => 'menu.item.store',
                'permission_name' => 'menu.item.store'
            ],
            [
                'route' => 'menu.item.update',
                'permission_name' => 'menu.item.update'
            ],
            [
                'route' => 'menu.item.destroy',
                'permission_name' => 'menu.item.destroy'
            ],
        ]);

        // route management
        Route::insert([
            [
                'route' => 'route.index',
                'permission_name' => 'route.index'
            ],
            [
                'route' => 'route.store',
                'permission_name' => 'route.store'
            ],
            [
                'route' => 'route.update',
                'permission_name' => 'route.update'
            ],
            [
                'route' => 'route.destroy',
                'permission_name' => 'route.destroy'
            ],
        ]);

        // role management
        Route::insert([
            [
                'route' => 'role.index',
                'permission_name' => 'role.index'
            ],
            [
                'route' => 'role.store',
                'permission_name' => 'role.store'
            ],
            [
                'route' => 'role.update',
                'permission_name' => 'role.update'
            ],
            [
                'route' => 'role.destroy',
                'permission_name' => 'role.destroy'
            ],
        ]);

        // permission management
        Route::insert([
            [
                'route' => 'permission.index',
                'permission_name' => 'permission.index'
            ],
            [
                'route' => 'permission.store',
                'permission_name' => 'permission.store'
            ],
            [
                'route' => 'permission.update',
                'permission_name' => 'permission.update'
            ],
            [
                'route' => 'permission.destroy',
                'permission_name' => 'permission.destroy'
            ],
        ]);
    }
}
