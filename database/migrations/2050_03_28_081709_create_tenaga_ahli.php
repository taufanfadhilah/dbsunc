<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenagaAhli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenaga_ahli', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nik', 100);
            $table->string('tmptl', 100);
            $table->date('lahir');
            $table->string('alamat', 100);
            $table->string('ktp', 100)->nullable();
            $table->string('npwp', 100)->nullable();
            $table->string('pendidikan', 100);
            $table->string('ijazah', 100)->nullable();
            $table->bigInteger('ska_id')->unsigned()->nullable();
            $table->string('legalska', 100)->nullable();
            $table->date('berlaku')->nullable();
            $table->bigInteger('ska_id2')->unsigned()->nullable();
            $table->string('legalska2', 100)->nullable();
            $table->date('berlaku2')->nullable();
            $table->bigInteger('ska_id3')->unsigned()->nullable();
            $table->string('legalska3', 100)->nullable();
            $table->date('berlaku3')->nullable();
            
            $table->bigInteger('status_id')->unsigned()->nullable();
            $table->timestamps();
        });
        Schema::table('tenaga_ahli', function (Blueprint $table) {
            $table->foreign('ska_id')->references('id')->on('ska')
                ->onDelete('set null')->onUpdate('cascade');
            $table->foreign('ska_id2')->references('id')->on('ska')
                ->onDelete('set null')->onUpdate('cascade');
            $table->foreign('ska_id3')->references('id')->on('ska')
                ->onDelete('set null')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('status')
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
        Schema::dropIfExists('tenaga_ahli');
    }
}
