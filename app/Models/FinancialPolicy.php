<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FinancialPolicy extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'financial_policies';

    protected $primaryKey = 'financial_id';

    protected $guarded = 'financial_id';
}
