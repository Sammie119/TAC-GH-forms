<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWAreaheadReport extends Model
{
    use HasFactory;

    protected $table = 'v_w_areahead_reports';

    protected $hidden = [
        'area_head_id',
    ];
}
