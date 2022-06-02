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

        Route::insert([
            [
                'route' => 'dashboard.index',
                'permission_name' => 'dashboard.index'
            ],
            [
                'route' => 'menu.index',
                'permission_name' => 'menu.index'
            ],
            [
                'route' => 'menu.item.index',
                'permission_name' => 'menu.item.index'
            ],
            [
                'route' => 'permission.index',
                'permission_name' => 'permission.index'
            ],
            [
                'route' => 'role.index',
                'permission_name' => 'role.index'
            ],
            [
                'route' => 'route.index',
                'permission_name' => 'route.index'
            ],

        ]);
    }
}
