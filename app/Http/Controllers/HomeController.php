<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $getPembeli = DB::table('pembeli')->get();
        $getHewan = DB::table('hewan')->get();
        $getTransaksi = DB::table('transaksi')->get();
        $getPembayaran = DB::table('pembayaran')->get();
        return view('home', [
            'getPembeli' => $getPembeli,
            'getHewan' => $getHewan,
            'getTransaksi' => $getTransaksi,
            'getPembayaran' => $getPembayaran
        ]);
    }
}
