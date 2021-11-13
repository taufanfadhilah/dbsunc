<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peralatan extends Model
{
    protected $table = 'peralatan';
    
    protected $fillable = [
        'Id','nama','pembelian','harga', 'imgalat','desc',
    ];
}
