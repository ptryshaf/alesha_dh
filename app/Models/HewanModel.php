<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HewanModel extends Model
{
    use HasFactory;
    protected $table = 'hewan';

    // protected $primaryKey = 'id_hewan';

    protected $fillable = [
        "nm_hewan", "jns_hwn", "berat", "stok", "harga"
    ];
}
