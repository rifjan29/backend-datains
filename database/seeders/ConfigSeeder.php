<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Config::create([
            'site_name' => 'Datains Dashboard',
            'site_title' => 'Datains Dashboard',
            'site_desc' => 'Datains Dashboard',
        ]);
    }
}
