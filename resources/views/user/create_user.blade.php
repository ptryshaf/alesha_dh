@extends('master')
@section('content')

<div class="content">
    <a class="navbar-brand" href="javascript:;">Tambah User </a><br>
    <div class="card-body">
        <form method="POST" action="/user">
            @csrf

              <div class="form-group">
                <label for="name">Nama</label>
                <input id="name" name="name" class="form-control">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input id="email" name="email" class="form-control" @error('email') is-invalid @enderror>
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" @error('password') is-invalid @enderror class="form-control">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
              </div>

              <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password" class="form-control" @error('email') is-invalid @enderror>
              </div>
              <div class="row">
                <div class="col-sm-2">
                  <button type="submit" class="btn-sm btn-primary">Submit</button>
                </div>
        </form>
        <div class="col-sm-1">
        <form action="/user" method="GET">
          <button type="submit" class="btn-sm btn-success">Back</button>
        </form>
        </div>
    </div>
        {{-- <a href="/pembeli" type="button" class="btn-sm btn-success">Back</a> --}}

    </div>
</div>
@endsection