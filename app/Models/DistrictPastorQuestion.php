<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DistrictPastorQuestion extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'district_pastor_questions';

    protected $primaryKey = 'district_pastor_id';

    protected $guarded = 'district_pastor_id';
}
