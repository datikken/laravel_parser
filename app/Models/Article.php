<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'resource_id',
        'link',
        'title',
        'description',
        'content'
    ];

    use HasFactory;
}
