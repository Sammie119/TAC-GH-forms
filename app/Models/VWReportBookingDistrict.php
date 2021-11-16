<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWReportBookingDistrict extends Model
{
    use HasFactory;

    protected $table = 'v_w_report_booking_districts';

    protected $hidden = [
        'record_id',
    ];
}
