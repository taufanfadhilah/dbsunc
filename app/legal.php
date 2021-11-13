<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class legal extends Model
{
    protected $table = 'legal';
    
    protected $fillable = [
        'id','dokumen', 'berlaku', 'habis', 'instansi','dokfile','desc',
    ];
}
