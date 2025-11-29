<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subparameter extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'parameter_id',
        'test_ids',
        'price',
        'image',
        'description',
        'status'
    ];

    protected $casts = [
        'parameter_id' => 'array',
        'test_ids'     => 'array',
        'price'        => 'decimal:2'
    ];

    protected static function booted()
    {
        static::saving(function ($model) {
            $model->slug = Str::slug($model->title);
        });
    }

    // ACCESSORS - Keep them (they work fine)
    public function getParametersAttribute()
    {
        return Parameter::whereIn('id', $this->parameter_id ?? [])->get();
    }

    public function getTestsAttribute()
    {
        return Test::whereIn('id', $this->test_ids ?? [])->get();
    }

    // THIS IS THE MISSING SCOPE - ADD IT!
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeInactive($query)
    {
        return $query->where('status', 'inactive');
    }
}
   