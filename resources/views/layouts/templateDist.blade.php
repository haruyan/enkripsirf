<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
      
      @yield('title')

    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('distribution/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('distribution/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="{{asset('distribution/https://fonts.googleapis.com/css?family=Roboto:300,400,700')}}">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="{{asset('distribution/vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{asset('distribution/vendor/owl.carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('distribution/vendor/owl.carousel/assets/owl.theme.default.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('distribution/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('distribution/css/custom.css')}}">
    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="{{asset('distribution/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('distribution/img/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('distribution/img/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('distribution/img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('distribution/img/apple-touch-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('distribution/img/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('distribution/img/apple-touch-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('distribution/img/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('distribution/img/apple-touch-icon-152x152.png')}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="{{asset('distribution/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
        <script src="{{asset('distribution/https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script><![endif]-->
  </head>
  <body>
    <div id="all">

      @yield('modal')

      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7">
              <h1 class="h2">

                @yield('subtitle')

              </h1>
            </div>
            <div class="col-md-5">

              @yield('top-side menu')

            </div>
          </div>
        </div>
      </div>
      <div id="content">

        @yield('content')

      </div>
        
      <!-- FOOTER -->
      <footer class="main-footer">
        
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 text-center-md">
                <p>&copy; 2018. Muhammad Sufyan Tsauri</p>
              </div>
              <div class="col-lg-8 text-right text-center-md">
                <p>Template design by <a href="{{asset('distribution/https://bootstrapious.com/free-templates')}}">Bootstrapious Templates </a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="{{asset('distribution/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('distribution/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('distribution/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('distribution/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('distribution/vendor/waypoints/lib/jquery.waypoints.min.js')}}"> </script>
    <script src="{{asset('distribution/vendor/jquery.counterup/jquery.counterup.min.js')}}"> </script>
    <script src="{{asset('distribution/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('distribution/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
    <script src="{{asset('distribution/js/jquery.parallax-1.1.3.js')}}"></script>
    <script src="{{asset('distribution/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('distribution/vendor/jquery.scrollto/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('distribution/js/front.js')}}"></script>
  </body>
</html>