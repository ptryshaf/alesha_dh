@extends('master')
@section('content')

<div class="content">
    <a class="navbar-brand" href="javascript:;">Edit Transaksi </a><br>
    <div class="card-body">
        <form method="POST" action="/transaksi/{{ $transaksi->id }}">
          @method('PUT')
            @csrf

            {{-- <div class="form-group">
              <label for="id_transaksi">Id Transaksi</label>
              <input id="id_transaksi" name="id_transaksi" class="form-control">
            </div> --}}

              <div class="form-group">
                <label for="id">Pembeli</label>
                <select  name="id_pembeli" id="id_pembeli" class="form-control">
                  <option value="">-- Pilih --</option>
                  @foreach ($pembeli_id as $row)
                  <option value="{{ $row->id }}" {{ $transaksi->id_pembeli == $row->id ? 'selected' : '' }}>{{ $row->nm_pembeli }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="alamat">Alamat</label>
                {{-- <input onchange="pembeli();" type="text" id="alamat" name="alamat" class="form-control" readonly> --}}
                <select name="alamat" id="alamat" class="form-control">
                  <option value="">-- Pilih --</option>
                  @foreach ($pembeli_id as $item)
                    <option value="{{ $item->id }}" {{ $transaksi->alamat == $item->id ? 'selected' : '' }}>{{ $item->alamat }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group" id="select_hewan">
                <label for="id_hewan">Hewan</label>
                <select onchange="getHarga()" name="id_hewan" class="form-control">
                  <option value="">-- Pilih --</option>
                  @foreach ($hewan_id as $row)
                  <option value="{{ $row->id }}" {{ $transaksi->id_hewan == $row->id ? 'selected' : '' }}>{{ $row->nm_hewan }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="quantity">Quantity</label>
                {{-- <input type="number" id="quantity" name="quantity" class="form-control"> --}}
                <select onkeyup="kali();" name="quantity" id="quantity" class="form-control">
                  @for ($i = 1; $i <=5; $i++)
                    <option value="{{ $i }}" {{ $transaksi->quantity == $i ? 'selected' : '' }}>{{ $i }}</option>
                  @endfor
                </select>
              </div>

              <div class="form-group">
              {{-- <input type="number" id="harga" name="harga" class="form-control"> --}}

                <label for="harga">Harga</label>
                <select onkeyup="kali();" name="harga" id="harga" class="form-control">
                  <option value="">-- Pilih --</option>
                  @foreach ($hewan_id as $item)
                    <option value="{{ $item->harga }}" {{ $transaksi->harga == $item->harga ? 'selected' : '' }}>{{ $item->harga }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="tgl_order">Tanggal Order</label>
                <input type="date" id="tgl_order" name="tgl_order" class="form-control" value="{{ $transaksi->tgl_order }}">
              </div>

              <div class="form-group">
                <label for="tgl_kirim">Tanggal Kirim</label>
                <input type="date" id="tgl_kirim" name="tgl_kirim" class="form-control" value="{{ $transaksi->tgl_kirim }}">
              </div>

              <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                  <option value="0">-- Pilih --</option>
                  <option value="Pemeliharaan" {{ $transaksi->status == "Pemeliharaan" ? 'selected' : '' }}>Pemeliharaan</option>
                  <option value="Dikirim" {{ $transaksi->status == "Dikirim" ? 'selected' : '' }}>Dikirim</option>
                  <option value="Diterima" {{ $transaksi->status == "Diterima" ? 'selected' : '' }}>Diterima</option>
                </select>
              </div>

              <div class="form-group">
                <label for="total_harga">Total Harga</label>
                <input onkeyup="kali();"  id="total_harga" name="total_harga" class="form-control" readonly value="{{ $transaksi->total_harga }}">
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