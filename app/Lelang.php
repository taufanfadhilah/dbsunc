<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    protected $table = 'lelang';
    
    protected $guarded =[]; 
    
    protected $fillable = [
        'Id','nama_paket', 'fase_Id', 'tanggal',
    ];

    public function fase()
    {
        return $this->belongsTo('App\fase');
    }
}
