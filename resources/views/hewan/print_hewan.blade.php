<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
<!-- CSS Files -->
<link href="{{ '/assets/css/bootstrap.min.css' }}" rel="stylesheet" />
<link href="{{ '/assets/css/paper-dashboard.css?v=2.0.1' }}" rel="stylesheet" />
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="{{ '/assets/demo/demo.css' }}" rel="stylesheet" />
<script>
window.print()
</script>

<div class="container my-3">
    <center><b><h3>Data Hewan</h3></b></center>
    
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis</th>
        <th scope="col">Harga</th>
        <th scope="col">Berat</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($hewan as $row)
        <tr>
            <td scope="row">{{ ++$n}}</td>
            <td>{{ $row->nm_hewan }}</td>
            <td>{{ $row->jns_hwn }}</td>
            <td>{{ $row->harga }}</td>
            <td>{{ $row->berat }}</td>
        
          </tr>
        @endforeach
     
    </tbody>
  </table>
</div>