
  <link href="{{ '/assets/css/struk.css' }}" rel="stylesheet" />
  <link rel="stylesheet" href="{{ 'assets/css/login.css' }}">


<table class="body-wrap">
    <tbody><tr>
        <td></td>
        <td class="container" width="600">
            <div class="content">
                <table class="main" width="100%" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td class="content-wrap aligncenter">
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <div class="brand-wrapper col-sm-1">
                                            <img src="{{ '/assets/img/circler.png' }}" width="10%" alt="logo" class="logo">
                                          </div>
                                          <div class="col">
                                            <p class="brand">Alesha Dhaniyyah</p>
                                          </div>
                                    </tr>
                                    
                                    <tr>
                                    <td class="content-block">
                                        <h2>Thanks for Order</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="content-block">
                                        <table class="invoice">
                                            <tbody><tr>
                                                   <p> Id Pembayaran : BY{{ $pembayaran->id }}</p> 
                                                   <p>Id Transaksi : TRS{{ $pembayaran->id_transaksi }}</p>
                                                    <p> Nama Pembeli : {{ $pembayaran->nm_pembeli }}</p>
                                                    
                                                </td>
                                               
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                        <tbody><tr>
                                                            <td>Harga Hewan</td>
                                                            <td class="alignright">Rp {{ $pembayaran->ttl_harga }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Harga Pemeliharaan</td>
                                                            <td class="alignright">Rp {{ $pembayaran->hrg_pemeliharaan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Harga Pengiriman</td>
                                                            <td class="alignright">Rp {{ $pembayaran->hrg_pengiriman }}</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Grand Total</td>
                                                            <td class="alignright">Rp {{ $pembayaran->total }}</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Down Payment</td>
                                                            <td class="alignright">Rp {{ $pembayaran->dp }}</td>
                                                        </tr>

                                
                                                        <tr class="total">
                                                            <td class="alignright" width="80%">Sisa Tagihan</td>
                                                            <td class="alignright">Rp {{ $pembayaran->sisa_pembayaran }}</td>
                                                        </tr>
                                                    </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </td>
                                </tr>
                                
                            </tbody></table>
                        </td>
                    </tr>
                </tbody></table>
               
        </td>
        <td></td>
    </tr>
</tbody></table>

<script>
    window.print();
</script>