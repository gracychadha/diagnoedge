<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    protected $fillable = [
        'title', 'description', 'detail_id', 'overview', 'price', 'status'
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];
}