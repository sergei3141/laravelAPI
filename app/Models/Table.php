<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Table extends Model
{
    use HasFactory;

protected $fillable = [
    'name',
    'lesson_num',
    'mon',
    'tue',
    'wed',
    'thu',
    'fri',
    'sat',
    'sun',
];

protected $hidden = [
    'created_at',
    'updated_at'
];
}
