<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWMemberReport extends Model
{
    use HasFactory;

    protected $table = 'v_w_member_reports';

    protected $hidden = [
        'member_id',
    ];
}
