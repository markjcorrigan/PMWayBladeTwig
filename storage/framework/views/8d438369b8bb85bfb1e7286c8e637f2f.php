<?php $__env->startSection('admin'); ?>

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <h6 class="card-title">Edit Service </h6>

            <form class="forms-sample" method="POST" action="<?php echo e(route('update.service')); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="service_id" value="<?php echo e($service->id); ?>">
                <div class="row mb-3">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Service Title:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="service_title" value="<?php echo e($service->service_title); ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Service Description:</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="service_description" rows="3" placeholder="Service Description">
                            <?php echo e($service->service_description); ?>

                        </textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-secondary">Update Service</button>
            </form>

        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\backend\services\edit_service.blade.php ENDPATH**/ ?>