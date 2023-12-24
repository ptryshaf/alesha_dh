<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranModel extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';

    protected $fillable = [
        "id_transaksi", "ttl_harga", "nm_pembeli",  "hrg_pemeliharaan", "hrg_pengiriman", "total", "dp", "sisa_pembayaran", "status", "bukti"
    ];
}
