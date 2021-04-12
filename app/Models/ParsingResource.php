<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParsingResource extends Model
{
    protected $fillable = [
        'link',
        'class_list',
        'class_block',
        'classes_to_filter'
    ];

    use HasFactory;
}
