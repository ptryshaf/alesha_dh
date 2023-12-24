@extends('master')
@section('content')


<div class="content">
    <a class="navbar-brand" href="javascript:;">Edit Pembeli </a><br>
    <div class="card-body">
        <form method="POST" action="/pembeli/{{ $pembeli->id }}">
            @method('PUT')
            @csrf
              <div class="form-group">
                <label for="nm_pembeli">Nama</label>
                <input id="nm_pembeli" value="{{ $pembeli->nm_pembeli }}" name="nm_pembeli" class="form-control">
              </div>

              <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input id="no_telp" value="{{ $pembeli->no_telp }}" name="no_telp" class="form-control">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" value="{{ $pembeli->email }}" name="email" class="form-control">
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input id="alamat" value="{{ $pembeli->alamat }}" name="alamat" class="form-control">
              </div>
              <div class="row">
                <div class="col-sm-1">
              <button type="submit" class="btn-sm btn-primary">Edit</button>
                </form>
               </div>
               <div class="col-sm-1">
                <form action="/pembeli" method="GET">
                  <button type="submit" class="btn-sm btn-success">Back</button>
                </form>
                </div>
              </div>
    </div>
</div>
@endsection