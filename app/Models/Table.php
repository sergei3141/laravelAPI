<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

protected $fillable = [
    'name',
    'lesson_num',
    'open',
    'mon',
    'tue',
    'wed',
    'thu',
    'fri',
    'sat',
    'sun',
    'base',
];

protected $hidden = [
    'created_at',
    'updated_at'
];
}
