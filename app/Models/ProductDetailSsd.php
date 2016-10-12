<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductDetailSsd
 */
class ProductDetailSsd extends Model
{
    protected $table = 'product_detail_ssd';

    protected $primaryKey = 'product_detail_id';

	public $timestamps = false;

    protected $fillable = [
        'product_id',
        'product_producer',
        'product_model',
        'product_title',
        'product_memory',
        'product_interfaces',
        'product_size',
        'product_speed_write',
        'product_speed_read',
        'product_group_id'
    ];

    protected $guarded = [];

        
}