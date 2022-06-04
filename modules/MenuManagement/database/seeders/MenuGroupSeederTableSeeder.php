<?php

namespace Modules\MenuManagement\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\MenuManagement\app\Models\MenuGroup;

class MenuGroupSeederTableSeeder extends Seeder
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

        MenuGroup::insert([
            [
                'name' => 'General',
                'permission_name' => 'general',
            ],
            [
                'name' => 'Setting',
                'permission_name' => 'setting',
            ]
        ]);
    }
}
