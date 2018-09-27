<?php $__env->startSection('main-panel'); ?>
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">Kelola Soal</h5>
          <?php if(Session::has('message')): ?>
            <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
          <?php elseif(Session::has('destroy')): ?>
            <div class="alert alert-warning"><?php echo e(Session::get('destroy')); ?></div>
          <?php endif; ?>
          <div class="table-responsive">
            <table class="table center-aligned-table">
              <thead>
                <tr>
                  <th class="border-bottom-0">Soal No</th>
                  <th class="border-bottom-0">Lihat Soal</th>
                  <th class="border-bottom-0">Ubah Soal</th>
                  <th class="border-bottom-0">Hapus Soal</th>
                  <th class="border-bottom-0"></th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($index+1); ?></td>
                        <td><a href="<?php echo e(route('task.show',$task->id)); ?>" class="btn btn-outline-success btn-md"><i class="mdi mdi-folder-open"></i> Lihat</a></td>
                        <td>
                          <a href="<?php echo e(route('task.edit',$task->id)); ?>" class="btn-block"><button type="button" class="btn btn-outline-primary btn-md"><i class="mdi mdi-pencil"></i> Ubah</button></a>
                          
                        </td>
                        <td>
                          <?php echo Form::open(array('route'=>['task.destroy',$task->id],'method'=>'DELETE')); ?>

                              <?php echo Form::button('<i class="mdi mdi-delete"></i> Delete',['class'=>'btn btn-outline-danger btn-md','type'=>'submit']); ?>

                          <?php echo Form::close(); ?>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <script type="text/javascript">
    $(()=>{
      if(<?php echo Session::has('message'); ?>){
        swal('Berhasil','data telah dienkripsi','success');
      }
    });
  </script>
  <script type="text/javascript">
    $(()=>{
      if(<?php echo Session::has('destroy'); ?>){
        swal('Peringatan','data telah dihapus','warning');
      }
    });
  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>