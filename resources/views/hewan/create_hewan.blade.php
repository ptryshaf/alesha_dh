@extends('master')
@section('content')

<div class="content">
    <a class="navbar-brand" href="javascript:;">Tambah Hewan </a><br>
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
        <form method="POST" action="/hewan">
          {{ csrf_field() }}

              {{-- <div class="form-group">
                <label for="id_hewan">Id_Hewan</label>
                <input id="id_hewan" name="id_hewan" class="form-control">
              </div> --}}

              <div class="form-group">
                <label for="nm_hewan">Nama Hewan</label>
                <input value="{{ old('nm_hewan') }}" id="nm_hewan" name="nm_hewan" class="form-control">
              </div>

              <div class="form-group">
                <label for="jns_hwn">Jenis Hewan</label>
                  <select name="jns_hwn" id="jns_hwn" class="form-control">
                      <option value="{{ old('jns_hwn') }}">-- Pilih Jenis --</option>
                      <option value="Sapi">Sapi</option>
                      <option value="Domba">Domba</option>
                  </select>
                
                {{-- <input id="jns_hwn" name="jns_hwn" class="form-control"> --}}
              </div>

              <div class="form-group">
                <label for="berat">Berat</label>
                <input value="{{ old('berat') }}" id="berat" name="berat" class="form-control">
              </div>

              <div class="form-group">
                <label for="stok">Stok</label>
                <input value="{{ old('stok') }}" id="stok" name="stok" type="number" class="form-control">
              </div>

              <div class="form-group">
                <label for="harga">Harga</label>
                <input value="{{ old('harga') }}" id="harga" name="harga" class="form-control">
              </div>

              <div class="row">
                <div class="col-sm-2">
                  <button type="submit" class="btn-sm btn-primary">Submit</button>
                </div>
        </form>
        <div class="col-sm-1">
        <form action="/hewan" method="GET">
          <button type="submit" class="btn-sm btn-success">Back</button>
        </form>
        </div>
    </div>
        {{-- <a href="/pembeli" type="button" class="btn-sm btn-success">Back</a> --}}

    </div>
</div>
@endsection