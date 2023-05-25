<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SUPRA JAYA MOTOR</title>
    @laravelPWA
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('BE/plugins/fontawesome-free/css/all.min.css')}} ">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('BE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('BE/asset/dist/css/adminlte.min.css')}}">
    <style>
    </style>
</head>

<body class="login-page" style="min-height: 466px" background="">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-danger">
    <div class="card-header text-center">
        <a href="/" class="h1">
        <img src="{{asset('BE/asset/dist/img/logo_login.png')}}" alt="logo_login"  class="brand-image elevation-7" style="opacity: .9">

        <a class="h4"><b>SUPRA JAYA </b>MOTOR</a>
      </div>
    <div class="card-body">
        <p class="login-box-msg">Masuk untuk melanjutkaan . . . </p>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-4">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
            @error('email')
            <span class="invalid-feedback" role="alert"></span>
          @enderror
        </div>
        <div class="input-group mb-4">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
            </span>
            @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">Ingatkan Saya</label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-danger btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      @if (Route::has('password.request'))
      <p class="mb-1">
        <a href="{{ route('password.request') }}">Lupa Password</a>
      </p>
      @endif
      <p class="mb-0">
        <a href="/register" class="text-center">Daftar Baru</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('BE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('BE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset ('BE/asset/dist/js/adminlte.min.js') }}"></script>
</body>
</html>

