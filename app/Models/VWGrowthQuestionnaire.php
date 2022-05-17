<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWGrowthQuestionnaire extends Model
{
    use HasFactory;

    protected $table = 'v_w_growth_questionnaires';

    protected $hidden = [
        'growth_id',
    ];
}
