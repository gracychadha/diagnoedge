<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subparameter extends Model
{
    //
    protected $fillable = [
        'title',
        'slug',
        'status',
        'description',
        'parameter_id',

    ];
    public function parameter()
    {
        return $this->belongsTo(Parameter::class, 'parameter_id');
    }

}
