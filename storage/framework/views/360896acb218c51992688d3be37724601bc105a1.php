<?php $__env->startSection('content'); ?>
  <div class="container">

      <section class="bar pb-0">
        <div class="row">
          <div class="col-md-12">
            <div class="heading">
              <h3>Kelola Soal</h3>
            </div>
          </div>
        </div>
        
        <div class="row bar mb-0">
        <div id="customer-orders" class="col-md-12">
          
          <div class="box mt-0 mb-lg-0">
            <?php if(Session::has('message')): ?>
                  <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
            <?php endif; ?>

            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th >Edit</th>
                    <th>Lihat</th>
                    <th>Hapus</th>
                  </tr>
                </thead>
                <tbody>

                        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th width="300"><?php echo e($index+1); ?></th>
                                
                                <td width="300">
                                        <a href="<?php echo e(route('task.edit',$task->id)); ?>" class="btn-block"><button type="button" class="btn btn-template-lightblue"><i class="fa fa-edit"></i> Edit</button></a>
                                </td>
                                <td width="300">
                                <a href="<?php echo e(route('task.show',$task->id)); ?>" class="btn-block"><button type="button" class="btn btn-template-white"><i class="fa fa-edit"></i> View</button></a>
                                
                                </td>
                                <td width="300">
                                    <button type="button" class="btn btn-danger btn-block" on-click="destroy()">Hapus</button>
                                    
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  

                  
                  
                  
                 
                  <tr>
                    <td></td>
                    <td colspan="3" style="padding-top: 40px;"><a href="<?php echo e(route('task.create')); ?>" class="btn btn-template-main"><i class="fa fa-plus"></i> Tambah Data</a>
                      
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        
      </section>
      
  </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('title'); ?>
    Manager - Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('top-side menu'); ?>
    <ul class="breadcrumb d-flex justify-content-end">
        <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>"><i class="fa fa-home"></i> Home</a></li>
        <li class="breadcrumb-item">

            <a href="<?php echo e(route('logout')); ?>"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out"></i> 
                <?php echo e(__('Logout')); ?>

            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
                        
        </li>
    </ul>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('subtitle'); ?> 
    Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>
  <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 id="login-modalLabel" class="modal-title">Customer Login</h4>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <form action="customer-orders.html" method="get">
            <div class="form-group">
              <input id="email_modal" type="text" placeholder="email" class="form-control">
            </div>
            <div class="form-group">
              <input id="password_modal" type="password" placeholder="password" class="form-control">
            </div>
            <p class="text-center">
              <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
            </p>
          </form>
          <p class="text-center text-muted">Not registered yet?</p>
          <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>