<?php

use App\AlarmLogs;
use Illuminate\Database\Seeder;

class AlarmLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AlarmLogs::create([
            'sensor_id' => 1,
            'avg_sensor' => 29,
        ]);
        AlarmLogs::create([
            'sensor_id' => 2,
            'avg_sensor' => 31,
        ]);
        AlarmLogs::create([
            'sensor_id' => 3,
            'avg_sensor' => 700,
            'L1' => 700,
            'L2' => 700,
            'L3' => 700,
        ]);

        AlarmLogs::create([
            'sensor_id' => 4,
            'avg_sensor' => 67,
            'L1' => 67,
            'L2' => 67,
            'L3' => 67,
        ]);

        AlarmLogs::create([
            'sensor_id' => 5,
            'avg_sensor' => 78,
            'L1' => 78,
            'L2' => 78,
            'L3' => 78,
        ]);
    }
}
