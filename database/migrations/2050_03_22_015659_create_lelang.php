<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLelang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lelang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket', 100);
            $table->bigInteger('fase_id')->unsigned()->nullable();
            $table->date('tanggal', 100);
            $table->timestamps();
        });

        Schema::table('lelang', function (Blueprint $table) {
            $table->foreign('fase_id')->references('id')->on('fase')
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
        Schema::dropIfExists('lelang');
    }
}
