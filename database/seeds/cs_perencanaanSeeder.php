<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cs_perencanaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sc_perencanaan')->insert([
            'nama_paket' => 'buat app',
            'bidang' => 'tech',
            'Bangunan' => 'maya',
            'lokasi' => 'madiun',
            'nama' => 'aan',
            'alamat' => 'taman',
            'nomor' => '91',
            'nilai' => '5000000',
            'mulai' => '1990-2-12',
            'selesai' => '1990-3-12',
            'selesai_BAP' => '1990-3-12',
            'bast' => 'ada',
        ]);
    }
}
