@extends('master')
@section('content')
    <div class="content">
    <a class="navbar-brand" href="javascript:;">Data User </a><br>
    <form action="/user/create" method="GET">
      <button type="submit" class="btn-sm btn-success"><i class="nc-icon nc-simple-add"></i> Tambah Data</button>
    </form>
    {{-- <button class="btn-sm btn-warning mx-2"><i class="nc-icon nc-credit-card"></i> Print Data</button> --}}
    <div class="card-body">
      <div class="table-responsive">
        <table class="table">
          <thead class="text-primary">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($user as $row)
              <tr>
                  <td scope="row">{{ ++$n}}</td>
                  <td>{{ $row->name}}</td>
                  <td>{{ $row->email }}</td>
                  <td>
                    <form action="/user/{{ $row->id }}" method="POST">
                      @method('DELETE')
                      @csrf
                    <button onclick="return confirm('Apakah Anda Yakin Data Akan Dihapus?')" type="submit" class="btn-sm btn-danger "><i class="nc-icon nc-simple-remove"></i></button>
                    </form>
                      {{-- <button type="button" class="btn-sm btn-danger "><i class="nc-icon nc-simple-remove"></i></button> --}}
                  </td>
                </tr>
              @endforeach
           
          </tbody>
        </table>
      </div>
    </div>
    
    @endsection