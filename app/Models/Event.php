<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    // This list tells Laravel it is safe to save these fields
    protected $fillable = [
        'title',
        'description',
        'date',
        'time_range',
        'venue',
        'dress_code',
        'image_path',
        'is_upcoming',
    ];
}