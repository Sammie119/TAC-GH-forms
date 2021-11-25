<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PastorAssessmentQues extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'pastor_assessment_ques';

    protected $primaryKey = 'pastor_ass_id';

    protected $guarded = 'pastor_ass_id';
}
