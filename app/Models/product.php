<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'name',
        'price_b2c',
        'price_b2b',
        'medical_usage',
        'description',
        'warnings',
        'order_type',
    ];
}

