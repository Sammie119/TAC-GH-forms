<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWDistrictPastorQuestion extends Model
{
    use HasFactory;

    protected $table = 'v_w_district_pastor_questions';

    protected $hidden = [
        'district_pastor_id',
    ];
}
