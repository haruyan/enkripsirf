<?php $__env->startSection('content'); ?>
    <div class="card" style="background: rgba(4, 4, 4, 0.3);">
        <div class="card-header"><?php echo e(__('Masuk')); ?></div>

        <div class="card-body">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                

                <div class="form-group">
                    <label for="email"><?php echo e(__('Nama')); ?></label>
                    <input type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" id="email" aria-describedby="emailHelp" placeholder="Masukkan Nama" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                    <i class="mdi mdi-account"></i>

                    <?php if($errors->has('email')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>

                

                <div class="form-group">
                    <label for="password"><?php echo e(__('Sandi')); ?></label>
                    <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" id="password" placeholder="Masukkan Sandi" name="password" required>
                    <i class="mdi mdi-eye"></i>

                    <?php if($errors->has('password')): ?>
                        <span class="invalid-feedback">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
                  </div>

                

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-white">
                            <?php echo e(__('Login')); ?>

                        </button>

                        
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>