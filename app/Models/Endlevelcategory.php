<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endlevelcategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'tcat_id',
        'mcat_id',
        'ecat_name'
    ];
}
