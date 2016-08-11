<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'title', 
    	'slug', 
    	'short_description', 
    	'long_description', 
    	'price', 
    	'discount', 
    	'discounted_price',
    	'featured_image'
    ];
}
