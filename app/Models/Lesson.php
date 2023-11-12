<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'base',
        'group_id',
        'marks',
        'lesson_num',
        'hw',
        'cw',
        'group',
        'theme',
    ];

    protected $hidden = [
        'updated_at',
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'lesson_id', 'id');
    }


}
