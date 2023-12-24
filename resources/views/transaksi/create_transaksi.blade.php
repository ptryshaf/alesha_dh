@extends('master')
@section('content')

<div class="content">
    <a class="navbar-brand" href="javascript:;">Tambah Transaksi </a><br>
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
        <form method="POST" action="/transaksi">
            @csrf

            {{-- <div class="form-group">
              <label for="id_transaksi">Id Transaksi</label>
              <input id="id_transaksi" name="id_transaksi" class="form-control">
            </div> --}}

              <div class="form-group">
                <label for="id">Pembeli</label>
                <select onchange="pembeli();" name="id_pembeli" id="id_pembeli" class="form-control">
                  <option value="{{ old('id_pembeli') }}">-- Pilih --</option>
                  @foreach ($pembeli_id as $row)
                  <option value="{{ $row->id }}">{{ $row->nm_pembeli }}</option>
                  @endforeach
                </select>
                
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                {{-- <input onchange="pembeli();" type="text" id="alamat" name="alamat" class="form-control" readonly> --}}
                <select name="alamat" id="alamat" class="form-control">
                  <option value="{{ old('alamat') }}">-- Pilih --</option>
                  @foreach ($pembeli_id as $item)
                    <option value="{{ $item->id }}">{{ $item->alamat }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group" id="select_hewan">
                <label for="id_hewan">Hewan</label>
                <select onchange="getHarga()" name="id_hewan" class="form-control">
                  <option value="{{ old('id_hewan') }}">-- Pilih --</option>
                  @foreach ($hewan_id as $row)
                  <option value="{{ $row->id }}">{{ $row->nm_hewan }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="quantity">Quantity</label>
                {{-- <input type="number" id="quantity" name="quantity" class="form-control"> --}}
                <select value="{{ old('quantity') }}" onchange="kali();" name="quantity" id="quantity" class="form-control">
                  @for ($i = 1; $i <=5; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
                </select>
              </div>

              <div class="form-group">
              {{-- <input type="number" id="harga" name="harga" class="form-control"> --}}

                <label for="harga">Harga</label>
                <select value="" onchange="kali();" name="harga" id="harga" class="form-control">
                  <option value="{{ old('harga') }}">-- Pilih --</option>
                  @foreach ($hewan_id as $item)
                    <option value="{{ $item->harga }}">{{ $item->harga }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="tgl_order">Tanggal Order</label>
                <input value="{{ old('tgl_order') }}" type="date" id="tgl_order" name="tgl_order" class="form-control">
              </div>

              <div class="form-group">
                <label for="tgl_kirim">Tanggal Kirim</label>
                <input value="{{ old('tgl_kirim') }}" type="date" id="tgl_kirim" name="tgl_kirim" class="form-control">
              </div>

              <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                  <option value="{{ old('status') }}">-- Pilih --</option>
                  <option value="Pemeliharaan">Pemeliharaan</option>
                  <option value="Dikirim">Dikirim</option>
                  <option value="Diterima">Diterima</option>
                </select>
              </div>

              <div class="form-group">
                <label for="total_harga">Total Harga</label>
                <input value="0" id="total_harga" name="total_harga" class="form-control" readonly>
              </div>

              <div class="row">
                <div class="col-sm-2">
                  <button type="submit" class="btn-sm btn-primary">Submit</button>
                </div>
        </form>
        <div class="col-sm-1">
        <form action="/transaksi" method="GET">
          <button type="submit" class="btn-sm btn-success">Back</button>
        </form>
        </div>

        </div>
    </div>
        {{-- <a href="/pembeli" type="button" class="btn-sm btn-success">Back</a> --}}

    </div>
</div>



@endsection
<script type="text/javascript">

 function kali(){
   var qty = document.getElementById('quantity').value;
   var hrg = document.getElementById('harga').value;
   var result = qty * hrg;

   if(!isNaN(result)){
     document.getElementById('total_harga').value = result;
   }
 }
//  function pembeli(){
//    pbl = document.getElementById('id_pembeli').value;

//    @foreach ($pembeli_id as $row)
//      if(pbl == {{ $row->id }} ){
//        alamat = {{ $row->alamat }}
//      }
//    @endforeach

//    document.getElementById('alamat').value = alamat;
//  }
  
    
  </script>