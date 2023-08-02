<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_menu');
            $table->string('daftar_menu');
            $table->integer('bmr');
            $table->string('range_karbohidrat');
            $table->string('range_gula');
            $table->string('range_lemak');
            $table->string('range_protein');
            $table->string('range_kalori');
            // Tambahkan field lainnya di sini jika diperlukan
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
        Schema::dropIfExists('transaksi');
    }
}
