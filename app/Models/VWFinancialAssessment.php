<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWFinancialAssessment extends Model
{
    use HasFactory;

    protected $table = 'v_w_financial_assessments';

    protected $hidden = [
        'financial_id',
    ];
}
