<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWReportBookingArea extends Model
{
    use HasFactory;

    protected $table = 'v_w_report_booking_areas';

    protected $hidden = [
        'record_id',
    ];
}
