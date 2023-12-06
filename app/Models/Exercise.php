<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    use HasFactory;

protected $fillable = [
    'tag',
    'rank',
    'link',
    'tests',
    'testKeys',
    'defaultFunction',
    'description',
];

protected $hidden = [
    'created_at',
    'updated_at'
];
}
