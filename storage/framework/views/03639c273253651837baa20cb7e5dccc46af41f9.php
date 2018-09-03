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

    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth login-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">

            <?php echo $__env->yieldContent('content'); ?>

            
            
          </div>

        </div>
      </div>
      <!-- content-wrapper ends -->
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
