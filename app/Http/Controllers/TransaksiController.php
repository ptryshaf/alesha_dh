<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiModel;
use App\Models\PembeliModel;
use App\Models\HewanModel;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = TransaksiModel::latest()->simplePaginate(20);
        // $transaksi = PembeliModel::with('pembeli')->get();
        // $transaksi = HewanModel::with('hewan')->get();
        return view('transaksi.view_transaksi', compact('transaksi'))->with('n', 0);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembeli_id = PembeliModel::all();
        $hewan_id = HewanModel::all();
        return view('transaksi.create_transaksi', compact('pembeli_id', 'hewan_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "id_pembeli" => 'required',
            "id_hewan" => 'required',
            "alamat" => 'required',
            "quantity" =>'required|numeric',
            "harga" =>'required',
            "tgl_order"=> 'required',
            "tgl_kirim"=> 'required' ,
            "status" =>'required',
            "total_harga" => 'required|numeric'
        ]);
        TransaksiModel::create($request->all());
        return redirect('/transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = TransaksiModel::find($id);
        $pembeli_id = PembeliModel::all();
        $hewan_id = HewanModel::all();

        return view('transaksi.edit_transaksi', [
            "transaksi" => $transaksi,
            "pembeli_id" => $pembeli_id,
            "hewan_id" => $hewan_id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        TransaksiModel::where('id', $id)->update([
            "id_pembeli" => $request->id_pembeli,
            "id_hewan" => $request->id_hewan,
            "alamat" => $request->alamat,
            "quantity" =>$request->quantity,
            "harga" =>$request->harga,
            "tgl_order"=> $request->tgl_order,
            "tgl_kirim"=> $request->tgl_kirim,
            "status" =>$request->status,
            "total_harga" => $request->total_harga
        ]);
        return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TransaksiModel::where('id', $id)->delete();

        return redirect('/transaksi');
    }
}
