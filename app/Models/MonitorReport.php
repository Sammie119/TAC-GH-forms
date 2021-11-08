<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MonitorReport extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'monitor_reports';

    protected $primaryKey = 'monitor_id';

    protected $guarded = 'monitor_id';
}
