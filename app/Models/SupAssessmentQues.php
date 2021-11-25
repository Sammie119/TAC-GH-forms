<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SupAssessmentQues extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'sup_assessment_ques';

    protected $primaryKey = 'sup_ass_id';

    protected $guarded = 'sup_ass_id';
}
