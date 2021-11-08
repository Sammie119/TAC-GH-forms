<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWLocalLevelQuestion extends Model
{
    use HasFactory;

    protected $table = 'v_w_local_level_questions';

    protected $hidden = [
        'local_level_id',
    ];
}
