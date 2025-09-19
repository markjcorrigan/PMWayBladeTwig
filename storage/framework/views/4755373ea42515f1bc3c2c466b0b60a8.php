<div>
    <h3>Edit Post Form</h3>
    <form wire:submit.prevent="save">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="post-title" class="text-muted mb-1 d-block"><small>Title</small></label>
            <input wire:model="post_title" id="post-title" class="form-control form-control-lg form-control-title"
                type="text" placeholder="" autocomplete="off" />
            <?php $__errorArgs = ['post_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="m-0 small alert alert-danger shadow-sm"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="post_description" class="text-muted mb-1"><small>Body Content</small></label>
            <textarea wire:model="post_description" required name="post_description" id="post_description"
                class="body-content tall-textarea form-control"></textarea>
            <?php $__errorArgs = ['post_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-0 alert alert-danger shadow-sm"> <?php echo e($message); ?> </p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="form-group">
            <label for="post_tags" class="text-muted mb-1 d-block"><small>Post Tags CSV: (Comma Separated
                    Values)</small></label>
            <input wire:model="post_tags" type="text" class="form-control <?php $__errorArgs = ['post_tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                placeholder="Tag1, Tag2 etc.">
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
        <div class="form-group">
            <label for="photo" class="text-muted mb-1 d-block"><small>Post Photo</small></label>
            <input wire:model="photo" <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="file" id="photo"
                style="display: none;">
            <label for="photo" class="btn btn-outline-primary">Choose File</label>
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
        <div class="form-group">
            <?php if($photo): ?>
            <img src="<?php echo e($photo->temporaryUrl()); ?>" alt="" style="width: 90px; height: 90px">
            <?php else: ?>
            <img src="<?php echo e(asset($post->photo)); ?>" alt="" style="width: 90px; height: 90px">
            <?php endif; ?>
        </div>
        <button class="btn btn-primary" type="submit">Save Changes</button>
    </form>
</div>

<!-- <script>
        $('.summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            callbacks: {
                onChange: function(contents, $editable) {
                    window.Livewire.find('<?php echo e($_instance->getId()); ?>').set('body', contents);
                }
            }
        });
    </script>
    <script>
        document.getElementById('reload').addEventListener('click', function() {
            location.reload();
        });
    </script> -->
</div><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\editpost.blade.php ENDPATH**/ ?>