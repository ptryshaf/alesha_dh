<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HewanModel;

class HewanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hewan = HewanModel::latest()->simplePaginate(20);
        return view('hewan.view_hewan', compact('hewan'))->with('n', 0);
    }

    public function print()
    {
        $hewan = HewanModel::latest()->get();
        return view('hewan.print_hewan', compact('hewan'))->with('n', 0);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hewan.create_hewan');

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
            "nm_hewan" => 'required',
            "jns_hwn" => 'required',
            "berat" =>'required|numeric',
            "stok" => 'required|numeric',
            "harga"=> 'required|numeric'
        ]);
        HewanModel::create($request->all());
        return redirect('/hewan');
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
        $hewan = HewanModel::find($id);

        return view('hewan.edit_hewan', [
            "hewan" => $hewan
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
        HewanModel::where('id', $id)->update([
            "nm_hewan" => $request->nm_hewan,
            "jns_hwn" => $request->jns_hwn,
            "berat" =>$request->berat,
            "stok" => $request->stok,
            "harga"=> $request->harga
        ]);
        return redirect('/hewan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HewanModel::where('id', $id)->delete();

        return redirect('/hewan');
    }
}
