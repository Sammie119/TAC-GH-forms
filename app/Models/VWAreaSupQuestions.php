<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWAreaSupQuestions extends Model
{
    use HasFactory;

    protected $table = 'v_w_area_sup_questions';

    protected $hidden = [
        'area_sup_id',
    ];
}
