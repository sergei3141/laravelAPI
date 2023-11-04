<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'group_num',
        'course_id',
        'active'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'pivot',
    ];

      // Многое ко многим
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
        // Один ко многим
//        public function users(): HasMany
//        {
//            return $this->hasMany(User::class, 'group_id', 'id');
//        }
}
