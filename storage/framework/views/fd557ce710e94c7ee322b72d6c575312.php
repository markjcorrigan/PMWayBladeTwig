<?php $__env->startSection('admin'); ?>

<div class="col-md-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">Edit Hero Section</h6>

            <form action="<?php echo e(route('update.here.section')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-center">
                        <div class="mb-3">
                            <label class="form-label"></label>
                            <img id="ShowImage" src="<?php echo e($hero->photo ? asset($hero->photo) : asset('uploads/no-img-avatar.png')); ?>" alt="" style="width: 120px !important; height: 140px; border-radius: 10px;">
                        </div>
                    </div>



                    <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Choose Hero Photo</label>
                                <input class="form-control" name="photo" type="file" id="Image">
                            </div>
                        </div><!-- Col -->

                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="<?php echo e($hero->name); ?>">
                            </div>
                        </div><!-- Col -->

                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Profession</label>
                                <input type="text" class="form-control" name="profession" value="<?php echo e($hero->profession); ?>">
                            </div>
                        </div><!-- Col -->

                    </div><!-- Row -->

                    <div class="row">














                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="form-label">LinkIn URL</label>
                                <input type="text" class="form-control" name="linkin_url" value="<?php echo e($hero->linkin_url); ?>">
                            </div>
                        </div><!-- Col -->

                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label class="form-label">GitHub URL</label>
                                <input type="text" class="form-control" name="github_url" value="<?php echo e($hero->github_url); ?>">
                            </div>
                        </div><!-- Col -->

                    </div><!-- Row -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Years Of Experience</label>
                                <input type="text" class="form-control" name="YOE" value="<?php echo e($hero->YOE); ?>">
                            </div>
                        </div><!-- Col -->

                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Projects Completed</label>
                                <input type="text" class="form-control" name="PC" value="<?php echo e($hero->PC); ?>">
                            </div>
                        </div><!-- Col -->

                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="form-label">Happy Clients </label>
                                <input type="text" class="form-control" name="HC" value="<?php echo e($hero->HC); ?>">
                            </div>
                        </div><!-- Col -->

                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Upload Your Resume (CV)</label>
                                <input class="form-control" name="resume" type="file">
                            </div>
                        </div><!-- Col -->

                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label class="form-label">Short Description</label>
                                <textarea class="form-control" name="short_description" rows="3"><?php echo e($hero->short_description); ?></textarea>
                            </div>
                        </div><!-- Col -->

                    </div><!-- Row -->
                    <button type="submit" class="btn btn-primary submit">Update Hero Section</button>
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

<?php echo $__env->make('admin.admin_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\backend\hero\here_section.blade.php ENDPATH**/ ?>