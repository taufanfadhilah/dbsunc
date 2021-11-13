<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ska extends Model
{
    protected $table = 'ska';
    
    protected $fillable = [
        'Id','ska', 'desc',
    ];
}
