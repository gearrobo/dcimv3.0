<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlarmLogs extends Model
{
    protected $fillable = ['sensor_id', 'avg_sensor', 'L1', 'L2', 'L3'];

    public function sensor()
    {
        return $this->belongsTo('App\Sensor', 'sensor_id');
    }
}
