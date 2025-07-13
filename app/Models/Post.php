<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Field names that are mass assignable
    protected $fillable = [
        'title',
        'content',
    ];
}
