<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'tcat_id',
        'mcat_id',
        'ecat_id',
        'p_name',
        'p_old_price',
        'p_current_price',
        'p_qty',
        'size',
        'color',
        'p_featured_photo',
        'photo',
        'p_description',
        'p_short_description',
        'p_feature',
        'p_condition',
        'p_return_policy',
        'p_is_featured',
        'p_is_active'
    ];
}
