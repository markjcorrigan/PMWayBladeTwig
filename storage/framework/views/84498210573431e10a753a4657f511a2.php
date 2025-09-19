<?php $__env->startSection('admin'); ?>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
<div class="card">
<div class="card-body">
<h6 class="card-title">My Skills</h6>

<div class="table-responsive">
  <table id="dataTableExample" class="table">
    <thead>
      <tr>
        <th>Serial No:</th>
        <th>Icon</th>
        <th>Technology Name</th>
        <th>Experience Level</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $allSkills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($key+1); ?></td>
                <td> <img src="<?php echo e(asset($skill->icon)); ?>" alt=""> </td>
                <td><?php echo e(Str::title($skill->technology_name)); ?></td>
                <td><?php echo e($skill->exp_level); ?></td>
                <td>
                    <a href="<?php echo e(route('edit.skill', [$skill->id])); ?>"  class="btn btn-inverse-light" style="margin-right: 10px;">Edit</a>
                    <a href="<?php echo e(route('delete.skill', [$skill->id])); ?>" id="delete"  class="btn btn-inverse-danger">Delete</a>
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


<?php echo $__env->make('admin.admin_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\backend\skills\all_skills.blade.php ENDPATH**/ ?>