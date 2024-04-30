<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kuitansi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pengaju');
            $table->bigInteger('nominal');
            $table->string('terbilang');
            $table->string('keperluan');
            $table->enum('jenis_kuitansi', ['pemasukan', 'pengeluaran', 'penerimaan_barang'])->nullable();
            $table->enum('pembayaran', ['tunai', 'transfer', 'lainnya']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuitansi');
    }
};
