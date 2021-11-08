<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWLocalEvangelism extends Model
{
    use HasFactory;

    protected $table = 'v_w_local_evangelisms';

    protected $hidden = [
        'local_evang_id',
    ];
}
