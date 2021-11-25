<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWPastorAssessmentQues extends Model
{
    use HasFactory;

    protected $table = 'v_w_pastor_assessment_ques';

    protected $hidden = [
        'pastor_ass_id',
    ];
}
