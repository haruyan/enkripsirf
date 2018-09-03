<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sistem Enkripsi</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo e(asset('../node_modules/mdi/css/materialdesignicons.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('../node_modules/simple-line-icons/css/simple-line-icons.css')); ?>">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo e(asset('star/css/style.css')); ?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo e(asset('star/images/favicon.png')); ?>" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:this_is_stars/partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="<?php echo e(asset('star/index.html')); ?>"><img src="<?php echo e(asset('star/images/logo.png')); ?>" alt="logo"/></a>
        <!-- <a class="navbar-brand brand-logo-mini" href="<?php echo e(asset('star/index.html')); ?>"><img src="<?php echo e(asset('star/images/logo-mini.svg')); ?>" alt="logo"/></a> -->
      </div>
      
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
      </button>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:this_is_stars/partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="<?php echo e(asset('star/images/faces/face4.jpg')); ?>" alt="image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">M. Sufyan Tsauri</p>
                <p class="designation">Admin</p>
                <div class="badge badge-teal mx-auto mt-3">Aktif</div>
              </div>
            </div>
          </li>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(asset('/beranda')); ?>"><img class="menu-icon" src="<?php echo e(asset('star/images/menu_icons/01.png')); ?>" alt="menu icon"><span class="menu-title">Beranda</span></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('task.index')); ?>"><img class="menu-icon" src="<?php echo e(asset('star/images/menu_icons/04.png')); ?>" alt="menu icon"><span class="menu-title">Kelola</span></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo e(route('task.create')); ?>"><img class="menu-icon" src="<?php echo e(asset('star/images/menu_icons/09.png')); ?>" alt="menu icon"> <span class="menu-title">Tambah data</span></a></li>
          <li class="nav-item purchase-button"><a class="nav-link" href="<?php echo e(route('logout')); ?>"
            onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
          <i class="mdi mdi-logout" style="color: #ffffff"></i> Keluar</a>
          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
              <?php echo csrf_field(); ?>
          </form>
          </li>


          
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          

          <?php echo $__env->yieldContent('main-panel'); ?>

          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:this_is_stars/partials/_footer.html -->

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?php echo e(asset('../node_modules/jquery/dist/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('../node_modules/popper.js/dist/umd/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('../node_modules/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo e(asset('star/js/off-canvas.js')); ?>"></script>
  <script src="<?php echo e(asset('star/js/misc.js')); ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
