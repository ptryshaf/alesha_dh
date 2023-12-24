@extends('master')
@section('content')

<div class="content">
    <a class="navbar-brand" href="javascript:;">Pembayaran </a><br>
    <div class="card-body">
        <form method="POST" action="/pembayaran/{{ $pembayaran->id }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
               
                        <div class="form-group">
                                <label for="id_transaksi">Id Transaksi</label>
                                <select name="id_transaksi" id="id_transaksi" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($trs_id as $row)
                                    <option value="{{ $row->id }}" {{ $pembayaran->id_transaksi == $row->id ? 'selected' : '' }}>TRS{{ $row->id }}</option>
                                    @endforeach
                                  </select>
                                {{-- <input id="id_transaksi" name="id_transaksi" class="form-control"> --}}
                      </div>

                      <div class="form-group">
                        <label for="nm_pembeli">Nama Pembeli</label>
                        <select name="nm_pembeli" id="nm_pembeli" class="form-control">
                            <option value="">-- Pilih --</option>
                            @foreach ($pbl as $row)
                            <option value="{{ $row->nm_pembeli }}" {{ $pembayaran->nm_pembeli == $row->nm_pembeli ? 'selected' : '' }}>{{ $row->nm_pembeli }}</option>
                            @endforeach
                          </select>
                        {{-- <input id="id_transaksi" name="id_transaksi" class="form-control"> --}}
                      </div>

                      <div class="form-group">
                        <label for="ttl_harga">Total Harga</label>
                                <select onchange="hit();" name="ttl_harga" id="ttl_harga" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($trs_id as $row)
                                    <option value="{{ $row->total_harga }}" {{ $pembayaran->ttl_harga == $row->total_harga ? 'selected' : '' }}>{{ $row->total_harga }}</option>
                                    @endforeach
                                  </select>
                      </div>
        
                      <div class="form-group">
                        <label for="hrg_pemeliharaan">Harga Pemeliharaan</label>
                        <input value="{{ $pembayaran->hrg_pemeliharaan }}" onchange="hit();" id="hrg_pemeliharaan" name="hrg_pemeliharaan" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="hrg_pengiriman">Harga Pengiriman</label>
                        <input value="{{ $pembayaran->hrg_pengiriman }}" onchange="hit();" id="hrg_pengiriman" name="hrg_pengiriman" class="form-control">
                      </div>

                      <div class="form-group">
                        <label for="total">Total Keseluruhan</label>
                        <input value="{{ $pembayaran->total }}"  id="total" name="total" class="form-control" readonly>
                      </div>

                      <div class="form-group">
                        <label for="dp">Down Payment</label>
                        <input value="{{ $pembayaran->dp }}" onchange="hit();" id="dp" name="dp" class="form-control">
                      </div>
                      
                      <div class="form-group">
                        <label for="sisa_pemayaran">Sisa Pembayaran</label>
                        <input value="{{ $pembayaran->sisa_pembayaran }}"  id="sisa_pembayaran" name="sisa_pembayaran" class="form-control" readonly>
                      </div>

                      <div class="form-group">
                        <label for="bukti">Bukti Pembayaran</label>
                        @error('bukti')
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                        @enderror
                        <input value="{{ $pembayaran->bukti }}" type="file" id="bukti" @error('bukti') is-invalid @enderror name="bukti" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status" name="status" class="form-control">
                            <option value="0"> </option>
                            <option value="Belum Lunas" {{ $pembayaran->status == "Belum Lunas" ? 'selected' : '' }}>Belum Lunas</option>
                            <option value="Lunas Sebagian" {{ $pembayaran->status == "Lunas Sebagian" ? 'selected' : '' }}>Lunas Sebagian</option>
                            <option value="Lunas" {{ $pembayaran->status == "Lunas" ? 'selected' : '' }}>Lunas</option>
                        </select>
                    </div>
              
               
              <div class="row">
                <div class="col-sm-2">
                  <button type="submit" class="btn-sm btn-primary">Submit</button>
                </form>
                </div>
        
            <div class="col-sm-1">
                <form action="/pembayaran" method="GET">
                  <button type="submit" class="btn-sm btn-success">Back</button>
                </form>
                </div>
               </div>
    </div>
</div>
@endsection

<script type="text/javascript">

function hit(){
var ttl_harga = document.getElementById('ttl_harga').value;
var pm = document.getElementById('hrg_pemeliharaan').value;
var pg = document.getElementById('hrg_pengiriman').value;

var total = parseInt(ttl_harga) + parseInt(pm) + parseInt(pg);
var dp = document.getElementById('dp').value;

sisa = parseInt(total) - parseInt(dp);

if(!isNaN(total)){
document.getElementById('total').value = total;
}

if(!isNaN(sisa)){
document.getElementById('sisa_pembayaran').value = sisa;
}


//     var ttl = document.getElementById('ttl_harga');
//     var pm = document.getElementById('hrg_pemeliharaan');
//     var pg = document.getElementById('hrg_pengiriman');

//     var tk = parseInt(ttl) + parseInt(pm) + parseInt(pg);
//     var dp = document.getElementById('dp');

//     var sp = tk - dp;

//     if(!isNaN(tk)){
//      document.getElementById('total').value = tk;
//     }
   

//    if(!isNaN(sp)){
//      document.getElementById('sisa_pembayaran').value = sp;
//    }
}

</script>