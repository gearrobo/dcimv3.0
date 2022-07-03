<?php

use App\Device;
use App\Sensor;
use Illuminate\Database\Seeder;

class SensorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sensor::create([
            'name' => 'Sensor Suhu 1',
            'description' => 'Sensor Suhu Server',
            'sensor_type_id' => 1,
            'device_id' => null,
            'status' => null,
            'floor_id' => null,
            'min_sensor' => 0,
            'max_sensor' => 17,
            'treshold_min_sensor' => 17,
            'min_hijau' => 20,
            'max_hijau' => 25,
            'treshold_max_sensor' => 28,
            'min_merah' => 28,
            'max_merah' => 35,
            'avg_sensor' => 23
        ]);
        Sensor::create([
            'name' => 'Sensor Suhu 2',
            'description' => 'Sensor Suhu Tamu',
            'sensor_type_id' => 1,
            'device_id' => null,
            'status' => null,
            'floor_id' => null,
            'min_sensor' => 0,
            'max_sensor' => 17,
            'treshold_min_sensor' => 17,
            'min_hijau' => 20,
            'max_hijau' => 25,
            'treshold_max_sensor' => 28,
            'min_merah' => 28,
            'max_merah' => 35,
            'avg_sensor' => 23
        ]);
        Sensor::create([
            'name' => 'Sensor Lembab 1',
            'description' => 'Sensor Lembab Server',
            'sensor_type_id' => 2,
            'device_id' => null,
            'status' => null,
            'floor_id' => null,
            'min_sensor' => 0,
            'max_sensor' => 45,
            'treshold_min_sensor' => 45,
            'min_hijau' => 50,
            'max_hijau' => 60,
            'treshold_max_sensor' => 65,
            'min_merah' => 65,
            'max_merah' => 100,
            'avg_sensor' => 56
        ]);
        Sensor::create([
            'name' => 'Sensor Lembab 2',
            'description' => 'Sensor Lembab Tamu',
            'sensor_type_id' => 2,
            'device_id' => null,
            'status' => null,
            'floor_id' => null,
            'min_sensor' => 0,
            'max_sensor' => 45,
            'treshold_min_sensor' => 45,
            'min_hijau' => 50,
            'max_hijau' => 60,
            'treshold_max_sensor' => 65,
            'min_merah' => 65,
            'max_merah' => 100,
            'avg_sensor' => 56
        ]);
        Sensor::create([
            'name' => 'Lampu 1',
            'description' => 'Lampu Ruang Server',
            'sensor_type_id' => 12,
            'device_id' => null,
            'status' => null,
            'floor_id' => null,
            'min_sensor' => 0,
            'max_sensor' => 0,
            'treshold_min_sensor' => 0,
            'min_hijau' => 0,
            'max_hijau' => 1,
            'treshold_max_sensor' => 1,
            'min_merah' => 1,
            'max_merah' => 1,
            'avg_sensor' => 1
        ]);
        Sensor::create([
            'name' => 'Lampu 2',
            'description' => 'Lampu Ruang Tamu',
            'sensor_type_id' => 12,
            'device_id' => null,
            'status' => null,
            'floor_id' => null,
            'min_sensor' => 0,
            'max_sensor' => 0,
            'treshold_min_sensor' => 0,
            'min_hijau' => 0,
            'max_hijau' => 1,
            'treshold_max_sensor' => 1,
            'min_merah' => 1,
            'max_merah' => 1,
            'avg_sensor' => 1
        ]);
        Sensor::create([
            'name' => 'Voltage',
            'device_id' => 1,
            'sensor_type_id' => 6,
            'min_sensor' => 0,
            'max_sensor' => 200,
            'treshold_min_sensor' => 200,
            'min_hijau' => 250,
            'max_hijau' => 400,
            'treshold_max_sensor' => 450,
            'min_merah' => 450,
            'max_merah' => 600,
            'avg_sensor' => 350,
            'L1' => 345,
            'L2' => 350,
            'L3' => 355,
        ]);
        Sensor::create([
            'name' => 'Current',
            'device_id' => 1,
            'sensor_type_id' => 7,
            'min_sensor' => 0,
            'max_sensor' => 0,
            'treshold_min_sensor' => 0,
            'min_hijau' => 15,
            'max_hijau' => 25,
            'treshold_max_sensor' => 30,
            'min_merah' => 30,
            'max_merah' => 50,
            'avg_sensor' => 35,
            'L1' => 34,
            'L2' => 35,
            'L3' => 35,
        ]);
        Sensor::create([
            'name' => 'Power',
            'device_id' => 1,
            'sensor_type_id' => 8,
            'min_sensor' => 0,
            'max_sensor' => 0,
            'treshold_min_sensor' => 0,
            'min_hijau' => 15,
            'max_hijau' => 25,
            'treshold_max_sensor' => 30,
            'min_merah' => 30,
            'max_merah' => 50,
            'avg_sensor' => 35,
            'L1' => 34,
            'L2' => 35,
            'L3' => 35,
        ]);
    }
}
