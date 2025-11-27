<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
    
     protected $fillable = [
'title',
'slug',
'status',
'description',
'parameter_id',
'image'

     ];
}
