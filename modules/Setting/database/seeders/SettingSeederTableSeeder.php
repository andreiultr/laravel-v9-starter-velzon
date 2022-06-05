<?php

namespace Modules\Setting\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\app\Models\Setting;

class SettingSeederTableSeeder extends Seeder
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

        Setting::insert([
            [
                'name' => 'role',
                'value' => 'User'
            ],
            [
                'name' => 'verified',
                'value' => true
            ],
        ]);
    }
}
