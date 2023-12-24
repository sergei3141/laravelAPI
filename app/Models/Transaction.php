<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'created_at',
        'user_paid',
        'add_to_balance',
        'fixed_sale',
        'total_balance',
        'percent_sale',
        'student',
        'balance_was',
        'personal_sale_info',
        'student_phone',
        'ip'
    ];
}

