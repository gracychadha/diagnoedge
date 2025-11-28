<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subparameter extends Model
{
    protected $fillable = [
        'title', 'slug', 'parameter_id', 'test_ids', 'price', 'image', 'description', 'status'
    ];

    protected $casts = [
        'parameter_id' => 'array',
        'test_ids'     => 'array',
    ];

    public function getParametersAttribute()
    {
        return Parameter::whereIn('id', $this->parameter_id ?? [])->get();
    }

    public function getTestsAttribute()
    {
        return Test::whereIn('id', $this->test_ids ?? [])->get();
    }

    protected static function booted()
    {
        static::saving(fn($m) => $m->slug = Str::slug($m->title));
    }
}