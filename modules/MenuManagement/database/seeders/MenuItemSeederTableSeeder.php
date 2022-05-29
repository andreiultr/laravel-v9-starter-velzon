<?php

namespace Modules\MenuManagement\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\MenuManagement\app\Models\MenuItem;

class MenuItemSeederTableSeeder extends Seeder
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

        MenuItem::insert([
            [
                'name' => 'Dashboard',
                'icon' => 'ri-dashboard-2-line',
                'route' => 'dashboard.index',
                'permission_name' => 'dashboard.index',
                'menu_group_id' => 1,
            ],
            [
                'name' => 'Menu Management',
                'icon' => 'ri-menu-line',
                'route' => 'menu.index',
                'permission_name' => 'menu.index',
                'menu_group_id' => 2,
            ]
        ]);
    }
}
