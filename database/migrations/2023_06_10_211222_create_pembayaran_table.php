<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi')->unique();
            $table->string('nm_pembeli');
            $table->integer('ttl_harga');
            $table->integer('hrg_pemeliharaan');
            $table->integer('hrg_pengiriman');
            $table->integer('total');
            $table->integer('dp');
            $table->integer('sisa_pembayaran');
            $table->string('status');
            $table->string('bukti');
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
        Schema::dropIfExists('pembayaran');
    }
}
