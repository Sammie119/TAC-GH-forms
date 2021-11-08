<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class LocalEvangelism extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'local_evangelisms';

    protected $primaryKey = 'local_evang_id';

    protected $guarded = 'local_evang_id';

}
