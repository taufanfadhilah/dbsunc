<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal', function (Blueprint $table) {
            $table->id();
            $table->string('dokumen', 200);
            $table->date('berlaku');
            $table->date('habis');
            $table->string('instansi', 200);
            $table->string('dokfile', 200) ->nullable();
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
        Schema::dropIfExists('legal');
    }
}
