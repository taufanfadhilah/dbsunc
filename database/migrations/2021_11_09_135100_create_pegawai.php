<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 200);
            $table->bigInteger('jabatan_id')->unsigned()->nullable();
            $table->string('tmpl', 200);
            $table->date('lahir');
            $table->longtext('alamat') -> nullable();;
            $table->string('pendidikan', 200) ->nullable();
            $table->string('tahun', 5)->nullable();
            $table->string('ktp', 100);
            $table->string('npwp', 100);
            $table->string('ijazah', 100);
            $table->string('keahlian', 200) ->nullable();
            $table->string('dokkeahlian', 200);
            $table->longtext('desc') -> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
}
