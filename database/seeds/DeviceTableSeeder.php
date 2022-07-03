<?php

use App\Device;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Device::create([
            'name' => 'Panel Utama',
            'type_id' => 20,
            'description' => 'Panel Input PLN'
        ]);
    }
}
