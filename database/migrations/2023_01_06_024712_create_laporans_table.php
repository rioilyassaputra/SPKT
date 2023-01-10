<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->increments('id_laporan');
            $table->string('no_laporan');
            $table->string('nik_pelapor');
            $table->string('nama_pelapor');
            $table->string('no_hp_pelapor');
            $table->string('alamat_pelapor');
            $table->string('kronologi_singkat');
            $table->integer('id_kategori_laporan');
            $table->string('status');
            $table->integer('response_by_id_admin');
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
        Schema::dropIfExists('laporans');
    }
};
