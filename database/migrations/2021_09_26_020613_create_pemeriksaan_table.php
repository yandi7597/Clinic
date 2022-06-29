<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien',100);
            $table->string('clinic',100);
            $table->string('nama_dokter',100);
            $table->date('tgl');
            $table->string('hasil_pengujian',100);
            $table->bigInteger('biaya');
            $table->bigInteger('pajak');
            $table->bigInteger('total_biaya');
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
        Schema::dropIfExists('pemeriksaan');
    }
}
