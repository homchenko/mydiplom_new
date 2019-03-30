<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'slug', 
        'title', 
        'image', 
        'category_id',
        'content', 
        'old_price', 
        'price', 
        'fat',
        'filler', 
        'is_active',
        'is_new',
        'is_hit',
        'is_recommended',
        'excerpt'
    ];
}