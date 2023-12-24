<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiModel;
use App\Models\PembayaranModel;
use App\Models\PembeliModel;

class StrukController extends Controller
{
    public function show($id){
        $pembeli = PembeliModel::find($id);
        $transaksi = TransaksiModel::find($id);
        // $trs = DB::table('transaksi')
        // ->join('pembeli', 'pembeli.id_pembeli', '=', 'transaksi.id_pembeli')->get();
        $pembayaran = PembayaranModel::find($id);
        return view('pembayaran.struk_view', compact('transaksi', 'pembayaran', 'pembeli'));
    }
}
