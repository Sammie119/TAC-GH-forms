<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AttendanceAnalysis extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'attendance_analyses';

    protected $primaryKey = 'attendance_id';

    protected $guarded = 'attendance_id';
}
