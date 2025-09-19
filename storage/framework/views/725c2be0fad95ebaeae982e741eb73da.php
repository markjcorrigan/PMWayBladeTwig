<?php $__env->startSection('admin'); ?>

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <h6 class="card-title">Add Work </h6>

            <form class="forms-sample" method="POST" action="<?php echo e(route('store.work')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row mb-3">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Service Category</label>
                    <div class="col-sm-9">
                        <select name="service_cat" class="form-select mb-3">
                            <option selected="">Select Service Category</option>

                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($service->id); ?>"><?php echo e($service->service_title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Sub Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="sub_title" placeholder="Sub Title">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Url</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="url" placeholder="Url">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Photo</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="photo" type="file" id="Image">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <img id="ShowImage" src="<?php echo e(asset('uploads/no_image.jpg')); ?>" alt="" style="width: 90px; height: 90px">
                    </div>
                </div>
            
                <button type="submit" class="btn btn-secondary">Add Work</button>
            </form>

        </div>
    </div>
</div>

<script>
    $(document).ready(function (){
        $('#Image').on('change', function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#ShowImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    })
</script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.admin_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\backend\portfolio\add_work.blade.php ENDPATH**/ ?>