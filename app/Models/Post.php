<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image_top',
        'slug',
        'body',
        'citation',
        'autor',
        'image_bottom',
        'featured',
        'published_at',
    ];
}
