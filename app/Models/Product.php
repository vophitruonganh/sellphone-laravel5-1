<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 */
class Product extends Model
{
    protected $table = 'products';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'url',
        'image',
        'amount',
        'price',
        'detail',
        'group_id',
        'trademark_id',
        'feature',
        'hot',
        'sale'
    ];

    protected $guarded = [];

        
}