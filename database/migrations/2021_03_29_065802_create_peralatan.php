<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeralatan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peralatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->date('pembelian');
            $table->biginteger('harga');
            $table->string('imgalat', 200) -> nullable();;
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
        Schema::dropIfExists('peralatan');
    }
}
