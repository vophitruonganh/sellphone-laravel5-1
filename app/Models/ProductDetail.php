<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductDetail
 */
class ProductDetail extends Model
{
    protected $table = 'product_detail';

    protected $primaryKey = 'product_detail_id';

	public $timestamps = false;

    protected $fillable = [
        'product_id',
        'product_detail_type',
        'product_detail_cpu',
        'product_detail_ram',
        'product_detail_rom',
        'product_detail_OS',
        'product_detail_camera_before',
        'product_detail_camera_after',
        'product_detail_memory',
        'product_detail_size',
        'product_detail_resolution',
        'product_detail_wireless',
        'product_detail_battery',
        'product_detail_weight',
        'product_detail_interface',
        'product_detail_camera',
        'product_detail_dvd',
        'product_detail_vga',
        'product_other'
    ];

    protected $guarded = [];

        
}