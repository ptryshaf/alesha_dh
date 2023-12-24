@extends('master')
@section('content')

<div class="content">
    <a class="navbar-brand" href="javascript:;">Tambah Pembeli </a><br>
    @if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card-body">
        <form method="POST" action="/pembeli">
            @csrf

              <div class="form-group">
                <label for="nm_pembeli">Nama</label>
                <input value="{{ old('nm_pembeli') }}" id="nm_pembeli" name="nm_pembeli" class="form-control">
              </div>

              <div class="form-group">
                <label for="no_telp">No Telp</label>
                <input value="{{ old('no_telp') }}" id="no_telp" name="no_telp" class="form-control">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input value="{{ old('email') }}" id="email" name="email" class="form-control">
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input value="{{ old('alamat') }}" id="alamat" name="alamat" class="form-control">
              </div>
              <div class="row">
                <div class="col-sm-2">
                  <button type="submit" class="btn-sm btn-primary">Submit</button>
                </div>
        </form>
        <div class="col-sm-1">
        <form action="/pembeli" method="GET">
          <button type="submit" class="btn-sm btn-success">Back</button>
        </form>
        </div>
    </div>
        {{-- <a href="/pembeli" type="button" class="btn-sm btn-success">Back</a> --}}

    </div>
</div>
@endsection