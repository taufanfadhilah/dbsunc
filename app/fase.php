<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fase extends Model
{
    protected $table = 'fase';
    
    protected $fillable = [
        'id','fase', 'desc',
    ];
}
