<?php $__env->startSection('admin'); ?>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h6 class="card-title">My Quality Services</h6>

<div class="table-responsive">
  <table id="dataTableExample" class="table">
    <thead>
      <tr>
        <th>Serial No:</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key+1); ?></td>
                <td><?php echo e(Str::title($service->service_title)); ?></td>
                <td><?php echo Str::wordWrap($service->service_description, 80, '<br>'); ?></td>
                <td>
                    <a href="<?php echo e(route('edit.service', [$service->id])); ?>"  class="btn btn-inverse-light" style="margin-right: 10px;">Edit</a>
                    <a href="<?php echo e(route('delete.service', [$service->id])); ?>" id="delete"  class="btn btn-inverse-danger">Delete</a>
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

<?php echo $__env->make('admin.admin_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\backend\services\all_services.blade.php ENDPATH**/ ?>