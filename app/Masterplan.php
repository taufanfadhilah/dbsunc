<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masterplan extends Model
{
    protected $table = 'masterplan';

    protected $guarded =[];       //untuk definisi jika tidak boleh di isi, pasang ACL di dalam kotak

    public function bangunan()
    {
        return $this->belongsTo('App\bangunan');
    }

    public function bast()
    {
        return $this->belongsTo('App\bast');
    }
}
