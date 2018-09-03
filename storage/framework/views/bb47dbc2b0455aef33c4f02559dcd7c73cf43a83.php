<?php $__env->startSection('main-panel'); ?>
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tambahkan Soal Baru</h4>
          
           <?php echo Form::open(array('route'=>'task.store')); ?>

            <?php echo csrf_field(); ?>
                        <div class='form-group'>
                          <label for="pertanyaan">Pertanyaan</label>
                          <textarea class="form-control" name="pertanyaan" rows="6" placeholder="Masukkan Pertanyaan"></textarea>
                        </div>

                        <p class="card-description">
                          Jawaban
                        </p>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-1 col-form-label">A</label>
                              <div class="col-sm-11">
                                <input type="text" name="jawabanA" class="form-control" placeholder="Jawaban A">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-1 col-form-label">B</label>
                              <div class="col-sm-11">
                                <input type="text" name="jawabanB" class="form-control" placeholder="Jawaban B">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-1 col-form-label">C</label>
                              <div class="col-sm-11">
                                <input type="text" name="jawabanC" class="form-control" placeholder="Jawaban C">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-1 col-form-label">D</label>
                              <div class="col-sm-11">
                                <input type="text" name="jawabanD" class="form-control" placeholder="Jawaban D">
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class='form-group'>
                            <?php echo Form::button('<i class="mdi mdi-shape-square-plus"></i> Tambahkan',['type'=>'submit','class'=>'btn btn-success mr-2']); ?>

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
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>