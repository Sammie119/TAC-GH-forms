<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWReportBookingLocal extends Model
{
    use HasFactory;

    protected $table = 'v_w_report_booking_locals';

    protected $hidden = [
        'record_id',
    ];
}
