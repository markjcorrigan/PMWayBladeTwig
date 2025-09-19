<div class="p-6">
    <form wire:submit.prevent="save" class="flex flex-col w-[400px] mx-auto py-16 p-4 bg-gray-100 rounded-lg shadow-md">
        <?php if($image): ?>
            <h2 class="text-lg font-bold mb-2">Preview:</h2>
            <div class="flex flex-wrap justify-center gap-6 mb-4">
                <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $im): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e($im->temporaryUrl()); ?>" class="w-[110px] h-[90px] object-cover rounded-lg border border-gray-200">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
        <input type="file" wire:model="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 mb-4" multiple>
        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="text-red-500 text-sm"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <button type="submit" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded-lg text-white text-lg">Save Photo</button>
    </form>
    <h2 class="text-lg font-bold mb-2 mt-6">Uploaded Images:</h2>
    <div class="flex flex-wrap gap-7">
        <?php if($images->isEmpty()): ?>
            <p>No images uploaded.</p>
        <?php else: ?>
            <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e($image); ?>" class="w-[128px] h-[120px] object-cover">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\image-upload.blade.php ENDPATH**/ ?>