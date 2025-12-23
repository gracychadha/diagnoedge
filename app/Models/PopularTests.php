<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PopularTests extends Model
{
    //
    protected $fillable = [
        'title',
        'image',
        'status',
        'description',
        'overview',
        'price',

    ];
}
