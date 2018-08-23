<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistem Enkripsi</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('../node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ asset('../node_modules/simple-line-icons/css/simple-line-icons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('star/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('star/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth login-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-dark text-left p-5">
              <h2>Masuk</h2>
              {{-- <h4 class="font-weight-light">Hello! let's get started</h4> --}}
              <form class="pt-5">
                <form method='POST' action="{{ route('login') }}">
                        @csrf

                  <div class="form-group">
                    <label for="email">Nama</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" aria-describedby="emailHelp" placeholder="Masukkan Nama" value="{{ old('email') }}" required autofocus>
                    <i class="mdi mdi-account"></i>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="password">Sandi</label>
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Masukkan Sandi" name="password" required>
                    <i class="mdi mdi-eye"></i>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="mt-5">
                    {{-- <a class="btn btn-block btn-warning btn-lg font-weight-medium" href="../../index.html">Masuk</a> --}}
                    <button type="submit" class="btn btn-block btn-light btn-lg font-weight-medium">
                        {{ __('Login') }}
                    </button>
                  </div>
                  {{-- <div class="mt-3 text-center">
                    <a href="#" class="auth-link text-white">Forgot password?</a>
                  </div> --}}
                </form>                  
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('../node_modules/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{ asset('../node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{ asset('../node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ asset('star/js/off-canvas.js')}}"></script>
  <script src="{{ asset('star/js/misc.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
