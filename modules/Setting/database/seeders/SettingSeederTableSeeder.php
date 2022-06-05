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

        $data = array(
            'role' => 'User',
            'email_should_verified' => true
        );

        Setting::create([
            'name' => 'setting',
            'data' => json_encode($data)
        ]);
    }
}
