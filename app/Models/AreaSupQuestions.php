<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AreaSupQuestions extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'area_sup_questions';

    protected $primaryKey = 'area_sup_id';

    protected $guarded = 'area_sup_id';
}
