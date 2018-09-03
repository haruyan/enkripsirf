<?php $__env->startSection('title'); ?>
    Edit - Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('top-side menu'); ?>
    <ul class="breadcrumb d-flex justify-content-end">
        <li class="breadcrumb-item"><a href="<?php echo e(url('/home')); ?>">Home</a></li>
        <li class="breadcrumb-item">

            <a href="<?php echo e(route('logout')); ?>"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
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

<?php $__env->startSection('content'); ?>
  <div class="container">

    <section class="bar pb-0">
      <div class="row">
        <div class="col-md-12">
          <div class="heading">
            <h3>Edit Soal</h3>
          </div>
        </div>
      </div>
      
      <section class="bar pt-0">
      <div class="row">
        
        <div class="col-md-8 mx-auto">
            <?php echo Form::model($task,array('route'=>['task.update',$task->id],'method'=> 'PUT')); ?>

                <div class='form-group'>
                    <?php echo Form::label('title','Enter Title'); ?>

                    <?php echo Form::text('title',null,['class'=>'form-control']); ?>

                </div>

                <div class='form-group'>
                    <?php echo Form::label('body','Enter Body'); ?>

                    <?php echo Form::textarea('body',null,['class'=>'form-control']); ?>

                </div>

                <div class='form-group'>
                    <?php echo Form::button('Update',['type'=>'submit','class'=>'btn btn-pprimary']); ?>

                </div>
            <?php echo Form::close(); ?>



            <?php if( count( $errors ) > 0 ): ?>
                  <ul class='alert alert-danger'>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li><?php echo e($error); ?></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
            <?php endif; ?>
      </div>
    </section>
      
    </section>
    
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>