<section class="w-full py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <form wire:submit="save" action="/manage-avatar" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="avatar" class="btn btn-secondary">
                            Choose an avatar
                            <input wire:loading.attr="disabled" wire:target="avatar" wire:model.live="avatar"
                                type="file" id="avatar" name="avatar" class="d-none" onchange="previewAvatar(event)">
                        </label>
                        <?php $__errorArgs = ['avatar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="alert small alert-danger shadow-sm"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <img src="<?php echo e($this->avatarPreview); ?>" alt="Avatar Preview"
                            style="width: 120px; height: 120px; border-radius: 50%;" id="avatar-preview">
                    </div>
                    <button wire:loading.attr="disabled" wire:target="avatar" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
        <div style="height: 400px;"></div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\avatarform.blade.php ENDPATH**/ ?>