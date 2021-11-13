<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    protected $guarded =[];       //untuk definisi jika tidak boleh di isi, pasang ACL di dalam kotak
    
    protected $fillable = [
        'id','nama','role_id','tmpl','lahir','alamat',
        'pendidikan','ktp','npwp','ijazah','tahun','keahlian','dokkeahlian','desc'
    ];

    public function role()
    {
        return $this->belongsTo('App\role');
    }
}
