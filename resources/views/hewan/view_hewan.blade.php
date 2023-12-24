@extends('master')
@section('content')

    <div class="content">
      
    <a class="navbar-brand" href="javascript:;">Data Hewan </a><br>
    <div class="row">
      <div class="col-sm-1">
        <form method="GET" action="/hewan/create">
          <button type="submit" class="btn-sm btn-success"><i class="nc-icon nc-simple-add"></i> Add</button>
        </form> 
      </div>

      <div class="col-sm-1">
        <form method="GET" action="/print">
          <button class="btn-sm btn-warning"><i class="nc-icon nc-credit-card"></i> Print</button>
        </form>
      </div>
    </div>
       
     
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Berat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($hewan as $row)
            <tr>
                <td scope="row">{{ ++$n}}</td>
                <td>HWN{{ $row->id }}</td>
                <td>{{ $row->nm_hewan }}</td>
                <td>{{ $row->jns_hwn }}</td>
                <td>{{ $row->harga }}</td>
                <td>{{ $row->stok }}</td>
                <td>{{ $row->berat }}</td>
                <td>
                  <div class="row">
                    <div class="col-sm-3">
                      <form action="/hewan/{{ $row->id }}/edit" method="GET">
                        <button type="submit" class="btn-sm btn-primary"><i class="nc-icon nc-tile-56"></i></button>
                      </form>
                      {{-- <a type="button" href="/pembeli/{{ $row->id }}/edit" class="btn-sm btn-primary"><i class="nc-icon nc-tile-56"></i></a> --}}
                    </div>
                    <div class="col-sm-3 mx-2">
                      <form action="/hewan/{{ $row->id }}" method="POST">
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