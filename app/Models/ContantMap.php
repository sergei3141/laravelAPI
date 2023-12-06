<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contantmap extends Model
{
    use HasFactory;

protected $fillable = [
    'mapUrl',
    'adressTitle',
    'adressSubtitle1',
    'adressSubtitle2',
];

protected $hidden = [
    'created_at',
    'updated_at'
];
}
