<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWAttendanceAnalysis extends Model
{
    use HasFactory;

    protected $table = 'v_w_attendance_analyses';

    protected $hidden = [
        'attendance_id',
    ];
}
