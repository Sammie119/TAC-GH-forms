<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWDistrictPastorReport extends Model
{
    use HasFactory;

    protected $table = 'v_w_district_pastor_reports';

    protected $hidden = [
        'district_pastor_id',
    ];
}
