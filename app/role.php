<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $table = 'role';

    protected $fillable = [
        'id','jabatan',
    ];
}
