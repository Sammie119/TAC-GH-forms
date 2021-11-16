<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWProcurementPolicy extends Model
{
    use HasFactory;

    protected $table = 'v_w_procurement_policies';

    protected $hidden = [
        'procurement_id',
    ];
}
