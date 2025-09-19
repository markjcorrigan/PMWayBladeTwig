<?php $__env->startSection('admin'); ?>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h6 class="card-title">Add Post </h6>


            
            
                
                    
                    
                    
                    
                
            



            <form class="forms-sample" method="POST" action="<?php echo e(route('store.post')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row mb-3">
                    <label for="post_title" class="col-sm-3 col-form-label">Post Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?php $__errorArgs = ['post_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            name="post_title" placeholder="Post Title" value="<?php echo e(old('post_title')); ?>" required>
                        <?php $__errorArgs = ['post_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="post_tags" class="col-sm-3 col-form-label">Post Tags <br>(CSV: Comma Separated
                        Values)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?php $__errorArgs = ['post_tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            name="post_tags" placeholder="Tag1, Tag2 etc." value="<?php echo e(old('post_tags')); ?>" required>
                        <?php $__errorArgs = ['post_tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="post_description" class="col-sm-3 col-form-label">Post Content</label>
                    <div class="col-sm-9">
                        <textarea class="form-control <?php $__errorArgs = ['post_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            name="post_description" rows="10"><?php echo e(old('post_description')); ?></textarea>
                        <?php $__errorArgs = ['post_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="photo" class="col-sm-3 col-form-label">Post Photo</label>
                    <div class="col-sm-9">
                        <input class="form-control <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="photo" type="file"
                            id="Image" required>
                        <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>


                <div class="row mb-3">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                        <img id="ShowImage" src="<?php echo e(asset('uploads/no_image.jpg')); ?>" alt=""
                            style="width: 90px; height: 90px">
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary">Add Post</button>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#Image').on('change', function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#ShowImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    })
</script>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_dashboard', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\backend\blog\add_post.blade.php ENDPATH**/ ?>