@extends('master')
@section('content')
    <div class="content">
    <a class="navbar-brand" href="javascript:;">Data Transaksi </a><br>
    <form method="GET" action="/transaksi/create">
      <button type="submit" class="btn-sm btn-success"><i class="nc-icon nc-simple-add"></i> Tambah Data</button>
    </form>
    {{-- <button class="btn-sm btn-warning mx-2"><i class="nc-icon nc-credit-card"></i> Print Data</button> --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">ID</th>
            <th scope="col">IDPBL</th>
            <th scope="col">IDHWN</th>
            <th scope="col">Quantity</th>
            <th scope="col">Order</th>
            <th scope="col">Kirim</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($transaksi as $row)
            <tr>
                <td scope="row">{{ ++$n}}</td>
                <td>TRS{{ $row->id }}</td>
                <td>PBL{{ $row->id_pembeli }}</td>
                <td>HWN{{ $row->id_hewan }}</td>
                <td>{{ $row->quantity }}</td>
                <td>{{ $row->tgl_order }}</td>
                <td>{{ $row->tgl_kirim}}</td>
                <td>{{ $row->status }}</td>
                <td>
                  <div class="row">
                    <div class="col-sm-3">
                      <form action="/transaksi/{{ $row->id }}/edit" method="GET">
                        <button type="submit" class="btn-sm btn-primary"><i class="nc-icon nc-tile-56"></i></button>
                      </form>
                      {{-- <a type="button" href="/pembeli/{{ $row->id }}/edit" class="btn-sm btn-primary"><i class="nc-icon nc-tile-56"></i></a> --}}
                    </div>
                    <div class="col-sm-3 mx-2">
                      <form action="/transaksi/{{ $row->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                      <button onclick="return confirm('Apakah Anda Yakin Data Akan Dihapus?')" type="submit" class="btn-sm btn-danger "><i class="nc-icon nc-simple-remove"></i></button>
                      </form>
                    </div>
                  </div>
                </td>
              </tr>
            @endforeach
         
        </tbody>
      </table>
    @endsection