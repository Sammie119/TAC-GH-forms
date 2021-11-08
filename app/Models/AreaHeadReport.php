<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AreaHeadReport extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'area_head_reports';

    protected $primaryKey = 'area_head_id';

    protected $guarded = 'area_head_id';
}
