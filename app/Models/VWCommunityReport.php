<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VWCommunityReport extends Model
{
    use HasFactory;

    protected $table = 'v_w_community_reports';

    protected $hidden = [
        'community_id',
        'commrep_question11',
    ];
}
