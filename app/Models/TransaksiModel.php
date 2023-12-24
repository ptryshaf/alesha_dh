<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiModel extends Model
{
    use HasFactory;
    protected $table = 'transaksi';

    protected $fillable = [
       "id_pembeli", "alamat", "id_hewan", "quantity", "harga", "tgl_order", "tgl_kirim", "status", "total_harga"
    ];
}

