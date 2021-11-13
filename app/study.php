<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class study extends Model
{
    protected $table = 'study';

    protected $guarded =[];       //untuk definisi jika tidak boleh di isi, pasang ACL di dalam kotak

    protected $fillable = [
        'id','nama_paket','bidang','bangunan_id','lokasi','nama',
        'alamat','nomor','nilai','mulai','selesai','selesai_BAP','dokkontrak_pr','bast_id',
    ];

    public function bangunan()
    {
        return $this->belongsTo('App\bangunan');
    }

    public function bast()
    {
        return $this->belongsTo('App\bast');
    }
}
