<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWDistrictLevelMonoter extends Model
{
    use HasFactory;

    protected $table = 'v_w_district_level_monoters';

    protected $hidden = [
        'district_level_id',
    ];
}
