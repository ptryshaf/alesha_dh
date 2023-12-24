<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembeliModel;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = PembeliModel::latest()->simplePaginate(20);
        return view('pembeli.view_pembeli', compact('pembeli'))->with('n', 0);
    }

    public function printPbl()
    {
        $pembeli = PembeliModel::latest()->get();
        return view('pembeli.print_pembeli', compact('pembeli'))->with('n', 0);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.create_pembeli');
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
            "nm_pembeli" => 'required',
            "no_telp" => 'required',
            "email" =>'required|email',
            "alamat"=> 'required'
        ]);
        PembeliModel::create($request->all());
        return redirect('/pembeli');
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
        $pembeli = PembeliModel::find($id);

        return view('pembeli.edit_pembeli', [
            "pembeli" => $pembeli
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
        PembeliModel::where('id', $id)->update([
            "nm_pembeli" => $request->nm_pembeli,
            "no_telp" => $request->no_telp,
            "email" => $request->email,
            "alamat" => $request->alamat
        ]);

        return redirect('/pembeli');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PembeliModel::where('id', $id)->delete();

        return redirect('/pembeli');
    }
}
