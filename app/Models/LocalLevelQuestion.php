<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LocalLevelQuestion extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'local_level_questions';

    protected $primaryKey = 'local_level_id';

    protected $guarded = 'local_level_id';
}
