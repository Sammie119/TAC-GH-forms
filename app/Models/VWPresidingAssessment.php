<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWPresidingAssessment extends Model
{
    use HasFactory;

    protected $table = 'v_w_presiding_assessments';

    protected $hidden = [
        'presiding_id',
    ];
}
