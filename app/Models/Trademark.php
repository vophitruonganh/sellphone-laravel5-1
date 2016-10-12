<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Trademark
 */
class Trademark extends Model
{
    protected $table = 'trademarks';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'url'
    ];

    protected $guarded = [];

        
}