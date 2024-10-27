<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = [
        'title',
        'author',
        'price',
        'synopsis',
        'image',
        'category',
        'description',
        'quantity',
        'publication_date',
        'edition'
    ];
}
