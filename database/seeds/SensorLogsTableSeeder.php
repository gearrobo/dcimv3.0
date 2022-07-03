<?php

use App\SensorLogs;
use Illuminate\Database\Seeder;

class SensorLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 150; $i++) {
            SensorLogs::create([
                'sensor_id' => 1,
                'avg_sensor' => random_int(17, 28),
            ]);
            SensorLogs::create([
                'sensor_id' => 2,
                'avg_sensor' => random_int(17, 28),
            ]);
            SensorLogs::create([
                'sensor_id' => 3,
                'avg_sensor' => random_int(300, 380),
                'L1' => random_int(300, 380),
                'L2' => random_int(300, 380),
                'L3' => random_int(300, 380),
            ]);

            SensorLogs::create([
                'sensor_id' => 4,
                'avg_sensor' => random_int(22, 45),
                'L1' => random_int(22, 45),
                'L2' => random_int(22, 45),
                'L3' => random_int(22, 45),
            ]);

            SensorLogs::create([
                'sensor_id' => 5,
                'avg_sensor' => random_int(25, 45),
                'L1' => random_int(25, 45),
                'L2' => random_int(25, 45),
                'L3' => random_int(25, 45),
            ]);
        }
    }
}
