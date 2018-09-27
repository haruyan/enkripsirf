<?php $__env->startSection('main-panel'); ?>
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Ubah Soal</h4>
          
           <?php echo Form::model($task,array('route'=>['task.update',$task->id],'method'=> 'PUT')); ?>

            
            <?php echo csrf_field(); ?>
                        <div class='form-group'>
                          <label for="pertanyaan">Pertanyaan</label>
                          
                          <textarea class="form-control" placeholder="Masukkan pertanyaan" rows="6" name="pertanyaan" cols="50"><?php echo e($task ->pertanyaan); ?></textarea>
                        </div>

                        <p class="card-description">
                          Jawaban
                        </p>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-1 col-form-label">A</label>
                              <div class="col-sm-11">
                                
                                <input class="form-control" placeholder="Jawaban A" name="jawabanA" type="text" value="<?php echo e($task ->jawabanA); ?>">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-1 col-form-label">B</label>
                              <div class="col-sm-11">
                                <input class="form-control" placeholder="Jawaban B" name="jawabanB" type="text" value="<?php echo e($task ->jawabanB); ?>">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-1 col-form-label">C</label>
                              <div class="col-sm-11">
                                <input class="form-control" placeholder="Jawaban C" name="jawabanC" type="text" value="<?php echo e($task ->jawabanC); ?>">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-1 col-form-label">D</label>
                              <div class="col-sm-11">
                                <input class="form-control" placeholder="Jawaban D" name="jawabanD" type="text" value="<?php echo e($task ->jawabanD); ?>">
                              </div>
                            </div>
                          </div>
                        </div>

                        <br>

                        <div class="template-demo">
                        <a href="<?php echo e(route('task.index')); ?>" class=""><button type="button" class="btn btn-light btn-md"><i class="mdi mdi-cancel"></i> Batal</button></a>
                        <a href="<?php echo e(route('task.index')); ?>" class=""><button type="submit" class="btn btn-warning btn-md"><i class="mdi mdi-autorenew"></i> Simpan Perubahan</button></a>
                        </div>

                        

                    <?php echo Form::close(); ?>


                    <br>


            <?php if( count( $errors ) > 0 ): ?>
                  <ul class='alert alert-danger'>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li><?php echo e($error); ?></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>