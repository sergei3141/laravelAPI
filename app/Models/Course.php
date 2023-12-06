<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];


    // Один ко многим
    public function themes(): HasMany
    {
        return $this->hasMany(Theme::class, 'course_id', 'id');
    }
}
