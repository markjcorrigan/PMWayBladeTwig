<?php $__env->startSection('admin'); ?>

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <h6 class="card-title">Add Testimony </h6>

            <form class="forms-sample" method="POST" action="<?php echo e(route('store.testimony')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="row mb-3">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" placeholder="John Doe" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Occupation </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="occupation" placeholder="CEO Namadi Group" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Testimony </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" required name="testimony" rows="3" placeholder="Message...."></textarea>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Photo</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="photo" type="file" id="Image" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <img id="ShowImage" src="<?php echo e(asset('uploads/no_image.jpg')); ?>" alt="" style="width: 90px; height: 90px">
                    </div>
                </div>
            
                <button type="submit" class="btn btn-secondary">Add Testimony</button>
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



<?php echo $__env->make('admin.admin_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\backend\testimonial\add_testimony.blade.php ENDPATH**/ ?>