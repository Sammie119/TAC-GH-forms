<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProcurementPolicy extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'procurement_policies';

    protected $primaryKey = 'procurement_id';

    protected $guarded = 'procurement_id';
}
