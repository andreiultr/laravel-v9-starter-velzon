<?php

namespace Modules\MenuManagement\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\MenuManagement\app\Models\MenuGroup;
use Modules\MenuManagement\app\Models\MenuItem;

class MenuManagementDatabaseSeeder extends Seeder
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

        $this->call(MenuGroupSeederTableSeeder::class);
        $this->call(MenuItemSeederTableSeeder::class);
    }
}
