@extends('..master')
@section('content')
    <div class="content">
    <a class="navbar-brand" href="javascript:;">Data Pembeli </a><br>
    <div class="row">
      <div class="col-sm-1">
        <form method="GET" action="/pembeli/create">
          <button type="submit" class="btn-sm btn-success"><i class="nc-icon nc-simple-add"></i>Add</button>
          </form>
      </div>

      <div class="col-sm-1">
        <form method="GET" action="/printpbl">
          <button class="btn-sm btn-warning mx-2"><i class="nc-icon nc-credit-card"></i>Print</button>
        </form>
      </div>

    </div>
   
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Telepon</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pembeli as $row)
            <tr>
                <td scope="row">{{ ++$n}}</td>
                <td>PBL{{ $row->id }}</td>
                <td>{{ $row->nm_pembeli }}</td>
                <td>{{ $row->no_telp }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->alamat }}</td>
                <td>
                  <div class="row">
                    <div class="col-sm-3">
                      <form action="/pembeli/{{ $row->id }}/edit" method="GET">
                        <button type="submit" class="btn-sm btn-primary"><i class="nc-icon nc-tile-56"></i></button>
                      </form>
                      {{-- <a type="button" href="/pembeli/{{ $row->id }}/edit" class="btn-sm btn-primary"><i class="nc-icon nc-tile-56"></i></a> --}}
                    </div>
                    <div class="col-sm-3 mx-2">
                      <form action="/pembeli/{{ $row->id }}" method="POST">
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