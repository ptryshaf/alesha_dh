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
    <center><b><h3>Data Pembeli</h3></b></center>
    
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Telepon</th>
        <th scope="col">Email</th>
        <th scope="col">Alamat</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pembeli as $row)
        <tr>
            <td scope="row">{{ ++$n}}</td>
            <td>{{ $row->nm_pembeli }}</td>
            <td>{{ $row->no_telp }}</td>
            <td>{{ $row->email }}</td>
            <td>{{ $row->alamat }}</td>
          </tr>
        @endforeach
    </tbody>
</table>
     