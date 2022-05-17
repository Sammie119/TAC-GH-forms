<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FinancialAssessment extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'financial_assessments';

    protected $primaryKey = 'financial_id';

    protected $guarded = 'financial_id';
}
