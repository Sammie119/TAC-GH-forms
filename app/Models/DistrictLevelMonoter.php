<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DistrictLevelMonoter extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'district_level_monoters';

    protected $primaryKey = 'district_level_id';

    protected $guarded = 'district_level_id';
}
