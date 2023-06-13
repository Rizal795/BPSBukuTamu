{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Login Sistem</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Favicons -->
  <link href="tamu/img/Logo_BPS.png" rel="icon">
  <link href="tamu/img/Logo_BPS.png" rel="apple-touch-icon">
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" /> --}}
  <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{ asset('login-asset/css/bootstrap-login-form.min.css') }}" />
</head>

<body>
  <!-- Start your project here-->

  <style>
    .gradient-custom-2 {
      /* fallback for old browsers */
      background: #445cd0;

      Chrome 10-25, Safari 5.1-6
      /* background: -webkit-linear-gradient(to left, #e7ee24, #36d882, #36dd73, #1d724a); */

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      /* background: linear-gradient(to left, #e7ee24, #36d882, #36dd73, #206f4a); */
    }
  </style>
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                <img class="mb-3" src="{{ asset('login-asset/img/Logo_BPS.png') }}" style="width: 100px;" alt="logo">
                <h4 class="mt-1 mb-3 pb-1 text-muted" style="font-size: 19px">Login E-Tamu</h4>
                </div>

                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-bordered">
                    <span style="font-size: 15px"><strong>Sorry!</strong> {{ $message }}</span>
                </div>
                @endif
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <p class="text-muted" style="font-size: 12px">Please login to your account</p>

                     <div class="form-outline mb-4">
                        {{-- <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="name" value="{{ old('name') }}" autocomplete="username"/> --}}
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        <label class="form-label" for="form2Example11">Name</label>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                    <div class="form-outline mb-4">
                    {{-- <input type="text" id="username" class="form-control @error('username') is-invalid @enderror" name="username"  placeholder="Username" value="{{ old('username') }}" autocomplete="username"/> --}}
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                    <label class="form-label" for="form2Example11">Username</label>
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="form-outline mb-4">
                        {{-- <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="email" value="{{ old('email') }}" autocomplete="email"/> --}}
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <label class="form-label" for="form2Example11">Email</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                    <div class="form-outline mb-4">
                    {{-- <input type="password" id="form2Example22" class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" autocomplete="current-password"/> --}}
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    <label class="form-label" for="form2Example22">Password</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="form-outline mb-4">
                        {{-- <input type="password" id="password-confirm" class="form-control @error('password-confirm') is-invalid @enderror" type="password" name="password-confirm" placeholder="Password-Confirm" autocomplete="current-password"/> --}}
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        <label class="form-label" for="form2Example22">Password Confirm</label>
                        @error('password-confirm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Register</button>
                      {{-- <a class="btn btn-primary btn-block fa-lg mb-3" href="/" type="button">Kembali Ke Halaman Awal</a> --}}
                      <h6 class="text-muted" style="font-size: 12px"> - - - REGISTER - - - </h6>
                      {{-- <a class="btn btn-info mb-1 btn-block btn-danger" href="{{ '/auth/redirect'}}"><i class="fa fa-brands fa-google-plus"></i></a>
                      <a class="text-muted" style="font-size: 12px" href="{{ route('password.request') }}">Forgot password?</a> --}}
                    </div>
                  </form>
                  <footer class="page-footer">
                    <div style="font-size:2.9mm" class="col-md-12 mb-2 mb-lg-0 text-center small text-dark">
                        Copyright <b>PKL IST 2023</b> - All rights reserved.
                        <span class="px-1 text-muted">|</span>
                        {{-- Dibuat dengan ♥ untuk 🇮🇩 --}}
                    </div>
                </footer>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">Hello!
                  </h4>
                  <p class="small mb-0">
                    E-Tamu adalah sebuah sistem atau aplikasi yang dirancang untuk mengelola dan memfasilitasi proses 
                    penerimaan tamu atau pengunjung di suatu tempat atau organisasi secara elektronik. Sistem ini memanfaatkan 
                    teknologi dan perangkat lunak untuk mempercepat dan menyederhanakan proses pendaftaran, identifikasi, dan pengawasan tamu.<br>
                    Beberapa fitur umum yang mungkin dimiliki oleh sistem E-Tamu meliputi:<br>
                    a. Pendaftaran Tamu<br>
                    b. Identifikasi Tamu<br>
                    c. Cetak Kartu Tamu<br>
                    d. Pemberitahuan Kedatangan<br>
                    e. Pencatatan Kunjungan<br>
                    f. Keamanan dan Keberlanjutan<br>
                    E-Tamu memiliki manfaat dalam meningkatkan efisiensi, keamanan, dan pengalaman tamu. Sistem ini umumnya 
                    digunakan di berbagai jenis organisasi seperti kantor, hotel, rumah sakit, gedung perkantoran, pusat konferensi, 
                    dan tempat-tempat umum lainnya.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="{{ asset('login-asset/js/mdb.min.js') }}"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>
