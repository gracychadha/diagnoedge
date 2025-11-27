<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Parameter extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'detail_id',
        'overview',
        'price',
        'status'
    ];

    protected $casts = [
        'detail_id' => 'array',
        'price' => 'decimal:2'
    ];

    protected static function booted()
    {
        static::creating(function ($parameter) {
            if (!$parameter->slug) {
                $parameter->slug = Str::slug($parameter->title);
            }
        });

        static::updating(function ($parameter) {
            if ($parameter->isDirty('title') && !$parameter->isDirty('slug')) {
                $parameter->slug = Str::slug($parameter->title);
            }
        });
    }

    // Relationship for tests
    public function tests()
    {
        return $this->belongsToMany(Test::class, 'parameter_test', 'parameter_id', 'test_id')
                    ->withTimestamps();
    }
}