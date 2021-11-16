<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecordBooksArea extends Model
{
    use HasFactory; 

    use SoftDeletes;

    protected $table = 'record_books_areas';

    protected $primaryKey = 'record_id';

    protected $guarded = 'record_id';
}
