<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PresidingAssessment extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'presiding_assessments';

    protected $primaryKey = 'presiding_id';

    protected $guarded = 'presiding_id';
}
