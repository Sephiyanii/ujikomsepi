<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeliCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beli_cashes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cash_kode');
            $table->bigInteger('Nomor_Ktp')->unsigned();
            $table->foreign('Nomor_Ktp')->references('id')->on('beli_cashes');
            $table->bigInteger('kode_motor')->unsigned();
            $table->foreign('kode_motor')->references('id')->on('beli_cashes');
            $table->date('cash_tanggal');
            $table->double('cash_bayar');
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
        Schema::dropIfExists('beli_cashes');
    }
}
