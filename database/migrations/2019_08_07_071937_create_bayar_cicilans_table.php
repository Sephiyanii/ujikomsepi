<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBayarCicilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayar_cicilans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cicilan_kode');
            $table->bigInteger('kridit_kode')->unsigned();
            $table->foreign('kridit_kode')->references('id')->on('bayar_cicilans');
            $table->date('cicilan_tanggal');
            $table->bigInteger('cicilan_jumlah');
            $table->bigInteger('cicilan_ke');
            $table->bigInteger('sisa_ke');
            $table->double('sisaharga');
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
        Schema::dropIfExists('bayar_cicilans');
    }
}
