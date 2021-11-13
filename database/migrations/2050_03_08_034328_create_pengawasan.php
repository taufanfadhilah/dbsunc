<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengawasan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengawasan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket', 100);
            $table->string('bidang', 100);
            $table->bigInteger('bangunan_id')->unsigned()->nullable();
            $table->string('lokasi', 100);
            $table->string('nama', 100);
            $table->string('alamat', 100);
            $table->string('nomor', 100);
            $table->biginteger('nilai');
            $table->date('mulai', 100);
            $table->date('selesai', 100);
            $table->date('selesai_BAP', 100);
            $table->string('dokkontrak_pw', 200) -> nullable();
            $table->bigInteger('bast_id')->unsigned()->nullable();

            $table->timestamps();
        });

        Schema::table('pengawasan', function (Blueprint $table) {
            $table->foreign('bangunan_id')->references('id')->on('bangunan')
                ->onDelete('set null')->onUpdate('cascade');
            $table->foreign('bast_id')->references('id')->on('bast')
                ->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengawasan');
    }
}
