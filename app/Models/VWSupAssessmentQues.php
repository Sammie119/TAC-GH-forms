<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWSupAssessmentQues extends Model
{
    use HasFactory;

    protected $table = 'v_w_sup_assessment_ques';

    protected $hidden = [
        'sup_ass_id',
    ];
}
