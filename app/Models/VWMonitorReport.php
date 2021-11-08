<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWMonitorReport extends Model
{
    use HasFactory;

    protected $table = 'v_w_monitor_reports';

    protected $hidden = [
        'monitor_id',
    ];
}
