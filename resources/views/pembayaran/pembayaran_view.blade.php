@extends('master')
@section('content')
    <div class="content">
    <a class="navbar-brand" href="javascript:;">Data Pembayaran </a><br>
    <form method="GET" action="/pembayaran/create">
      <button type="submit" class="btn-sm btn-success"><i class="nc-icon nc-simple-add"></i> Tambah Data</button>
      </form>
    {{-- <button class="btn-sm btn-warning mx-2"><i class="nc-icon nc-credit-card"></i> Print Data</button> --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">ID</th>
            <th scope="col">IDTRS</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Grand Total</th>
            <th scope="col">Sisa Pembayaran</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pembayaran as $row)
            <tr>
                <td scope="row">{{ ++$n}}</td>
                <td>BY{{ $row->id }}</td>
                <td>TRS{{ $row->id_transaksi }}</td>
                <td>{{ $row->ttl_harga }}</td>
                <td>{{ $row->total }}</td>
                <td>{{ $row->sisa_pembayaran }}</td>
                <td>{{ $row->status }}</td>
                <td>
                  <div class="row">
                    {{-- <div class="col-sm-3">
                      <button type="button" class="btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <i class="nc-icon nc-album-2"></i>
                      </button>
                      
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              @if ($row->bukti)
                              <img src="{{ asset('storage/post-bukti'.$row->bukti) }}" alt="{{ $row->bukti }}">
                              @endif
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> --}}
                    <div class="col-sm-3">
                      <form action="/pembayaran/{{ $row->id }}/edit" method="GET">
                        <button type="submit" class="btn-sm btn-primary"><i class="nc-icon nc-tile-56"></i></button>
                      </form>
                      {{-- <a type="button" href="/pembeli/{{ $row->id }}/edit" class="btn-sm btn-primary"><i class="nc-icon nc-tile-56"></i></a> --}}
                    </div>
                    <div class="col-sm-3 mx-2">
                      <form action="/pembayaran/{{ $row->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                      <button onclick="return confirm('Apakah Anda Yakin Data Akan Dihapus?')" type="submit" class="btn-sm btn-danger "><i class="nc-icon nc-simple-remove"></i></button>
                      </form>
                    </div>
                      <div class="col-sm-3">
                        <form action="{{ route('struk.show', $row->id) }}" method="GET">
                        <button type="submit" class="btn-sm btn-warning"><i class="nc-icon nc-credit-card"></i></button>
                      </form>
                        {{-- <a href="{{ route('struk.show', $row->id) }}" class="btn-sm btn-warning"><i class="nc-icon nc-credit-card"></i></a> --}}
                        {{-- <form action="/pembayaran/struk/{{ $row->id }}" method="GET">
                        <button type="submit" class="btn-sm btn-warning"><i class="nc-icon nc-credit-card"></i></button>
                        </form> --}}
                    </div>
                  </div>
                </td>
              </tr>
            @endforeach
         
        </tbody>
      </table>
    @endsection