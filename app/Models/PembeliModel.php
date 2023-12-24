<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembeliModel extends Model
{
    use HasFactory;
    protected $table = 'pembeli';

    protected $fillable = [
        "nm_pembeli", "no_telp", "email", "alamat"
    ];
}
