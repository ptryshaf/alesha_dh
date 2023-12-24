<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembayaranModel;
use App\Models\TransaksiModel;
use App\Models\PembeliModel;
use App\Models\HewanModel;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran = PembayaranModel::latest()->simplePaginate(20);
        return view('pembayaran.pembayaran_view', compact('pembayaran'))->with('n', 0);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $pbl = PembeliModel::all();
        $hwn = HewanModel::all();
        $trs_id = TransaksiModel::all();
        return view('pembayaran.create_pembayaran', compact('trs_id', 'hwn', 'pbl'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $file_name = $request->image->getClientOriginalName();
        // $request->image->storeAs('thumbnail', $file_name);

        // $img = $request->bukti;
        // $file_name =$img->getClientOriginalName();

        // return $request->file('bukti')->store('post-bukti', $file_name);
        $this->validate($request, [
            'id_transaksi' => 'required',
            'ttl_harga' => 'required',
            'nm_pembeli' => 'required',
            'hrg_pemeliharaan' => 'required',
            'hrg_pengiriman' =>'required',
            'total'=>'required',
            'dp' => 'required',
            'sisa_pembayaran' => 'required' ,
            'bukti' => 'required|image',
            'status' => 'required'
        ]);


        PembayaranModel::create($request->all());

        $validateData = $request->validate([
            'bukti'=> 'image|file|max:5024'
        ]);

        if($request->file('bukti')){
            $validateData['bukti'] = $request->file('bukti')->store('post-bukti');
        }
        PembayaranController::create($validateData);

        return redirect('/pembayaran')->with('success!', 'Data berhasil Ditambahkan!');
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
        $trs_id = TransaksiModel::all();
        $pbl = PembeliModel::all();
        $hwn = HewanModel::all();
        $pembayaran = PembayaranModel::find($id);


        return view('pembayaran.edit_pembayaran', [
            "pembayaran" => $pembayaran,
            "trs_id" => $trs_id,
            "pbl" => $pbl,
            "hwn" => $hwn
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
        PembayaranModel::where('id', $id)->update([
            "id_transaksi" => $request->id_transaksi,
            "ttl_harga" => $request->ttl_harga,
            "nm_pembeli" => $request->nm_pembeli,
            "hrg_pemeliharaan" => $request->hrg_pemeliharaan,
            "hrg_pengiriman" =>$request->hrg_pengiriman,
            "total"=> $request->total,
            "dp"=> $request->dp,
            "sisa_pembayaran"=> $request->sisa_pembayaran,
            "bukti"=> $request->bukti,
            "status"=> $request->status,

            
        ]);
        return redirect('/pembayaran')->with('success!', 'Data berhasil Di Update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PembayaranModel::where('id', $id)->delete();

        return redirect('/pembayaran');
    }

    public function views($id){
        return views('pembayaran.struk');
    }
}
