<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWFinancialPolicy extends Model
{
    use HasFactory;

    protected $table = 'v_w_financial_policies';

    protected $hidden = [
        'financial_id',
    ];
}
