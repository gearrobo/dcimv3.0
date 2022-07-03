<?php

use App\SensorType;
use Illuminate\Database\Seeder;

class SensorTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            1 => 'Temperature (celcius)',
            2 => 'Humidity (%)',
            3 => 'Smoke (ppm)',
            4 => 'Dust (ug/m)',
            5 => 'Door (unit)',
            6 => 'Voltage (volt)',
            7 => 'Current (amp)',
            8 => 'Active Power (W)',
            9 => 'Frequency (hz)',
            10 => 'Energy (Kwh)',
            11 => 'Lvmdp (%)',
            12 => 'Relay (unit)'
        ];
        for ($i = 1; $i < 13; $i++) { //count($data) + 1
            SensorType::create([
                'name' => $data[$i],
                'type' => 'sensor',
                'type_id' => $i
            ]);
        }

        $data = [
            20 => 'Panel',
            21 => 'Pac',
            22 => 'Ups',
            23 => 'Pdu',
            24 => 'Rack'
        ];
        for ($i = 20; $i < 25; $i++) {
            SensorType::create([
                'name' => $data[$i],
                'type' => 'alat',
                'type_id' => $i
            ]);
        }
    }
}
