<?php $__env->startSection('admin'); ?>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h6 class="card-title">All Testimonies </h6>

<div class="table-responsive">
  <table id="dataTableExample" class="table">
    <thead>
      <tr>
        <th>Serial No:</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Occupation</th>
        <th>Testimony</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $testimonies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $testimony): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key+1); ?></td>
                <td> <img src="<?php echo e(asset($testimony->photo)); ?>" alt=""> </td>
                <td><?php echo e(Str::title($testimony->name)); ?></td>
                <td><?php echo e($testimony->occupation); ?></td>
                <td><?php echo e(Str::limit($testimony->testimony, 20)); ?></td>
                <td>
                    <a href="<?php echo e(route('edit.testimony', [$testimony->id])); ?>"  class="btn btn-inverse-light" style="margin-right: 10px;">Edit</a>
                    <a href="<?php echo e(route('delete.testimony', [$testimony->id])); ?>" id="delete"  class="btn btn-inverse-danger">Delete</a>
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


<?php echo $__env->make('admin.admin_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\backend\testimonial\all_testimonies.blade.php ENDPATH**/ ?>