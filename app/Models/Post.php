<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\posts;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'image',
    ];
}
