@extends('master')
@section('content')


<div class="content">
    <a class="navbar-brand" href="javascript:;">Edit Hewan </a><br>
    <div class="card-body">
        <form method="POST" action="/hewan/{{ $hewan->id }}">
            @method('PUT')
            @csrf
            {{-- <div class="form-group">
                <label for="id_hewan">Id Hewan</label>
                <input id="id_hewan" value="{{ $hewan->id_hewan }}" name="id_hewan" class="form-control">
              </div> --}}

              <div class="form-group">
                <label for="nm_hewan">Nama Hewan</label>
                <input id="nm_hewan" value="{{ $hewan->nm_hewan }}" name="nm_hewan" class="form-control">
              </div>

              <div class="form-group">
                <label for="jns_hwn">Jenis Hewan</label>
                  <select name="jns_hwn" id="jns_hwn" class="form-control">
                      <option value="0"></option>
                      <option value="Sapi" {{ $hewan->jns_hwn == "Sapi" ? 'selected' : '' }}>Sapi</option>
                      <option value="Domba" {{ $hewan->jns_hwn == "Domba" ? 'selected' : '' }}>Domba</option>
                  </select>
              </div>

              <div class="form-group">
                <label for="berat">Berat</label>
                <input id="berat" value="{{ $hewan->berat }}" name="berat" class="form-control">
              </div>

              <div class="form-group">
                <label for="stok">Stok</label>
                <input id="stok" name="stok" type="number" value="{{ $hewan->stok }}" class="form-control">
              </div>

              <div class="form-group">
                <label for="harga">Harga</label>
                <input id="harga" value="{{ $hewan->harga }}" name="harga" class="form-control">
              </div>

              <div class="row">
                <div class="col-sm-1">
              <button type="submit" class="btn-sm btn-primary">Edit</button>
                </div>
              </form>
              <div class="col-sm-1">
                <form action="/hewan" method="GET">
                  <button type="submit" class="btn-sm btn-success">Back</button>
                </form>
                </div>
              </div>
        
    </div>
</div>
@endsection