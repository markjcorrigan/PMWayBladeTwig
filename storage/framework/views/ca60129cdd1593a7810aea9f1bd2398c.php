<?php $__env->startSection('admin'); ?>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h6 class="card-title">All Cantacts </h6>

<div class="table-responsive">
  <table id="dataTableExample" class="table">
    <thead>
      <tr>
        <th>Serial No:</th>
        <th>Client's Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Service Needed</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $contactMessages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($key+1); ?></td>
            <td> <?php echo e(Str::title($contact->first_name)); ?> <?php echo e(Str::title($contact->last_name)); ?> </td>
            <td><?php echo e($contact->email); ?></td>
            <td><?php echo e($contact->phone); ?></td>
            <td>
                <?php echo e($contact->service ? $contact->service->service_title : 'N/A'); ?>

            </td>
            <td><?php echo Str::wordWrap($contact->description, 20, '<br />'); ?></td>
            <td>
                <a href="<?php echo e(route('delete.contact', [$contact->id])); ?>" id="delete" class="btn btn-inverse-danger">Delete</a>
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


<?php echo $__env->make('admin.admin_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\backend\contact\all_contact_messages.blade.php ENDPATH**/ ?>