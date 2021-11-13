<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tenaga_ahli extends Model
{
    protected $table = 'tenaga_ahli';

    protected $guarded =[];       //untuk definisi jika tidak boleh di isi, pasang ACL di dalam kotak

    public function ska()
    {
        return $this->belongsTo('App\ska');
    }

    public function status()
    {
        return $this->belongsTo('App\status');
    }
}
