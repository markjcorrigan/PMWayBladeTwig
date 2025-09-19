<div class="bg-white rounded-lg shadow-md p-4 w-1/2">
    <h2 class="text-lg font-bold mb-2"><?php echo e($productId ? 'Edit Product' : 'Add Product'); ?></h2>
    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" wire:model="title" id="title" class="block w-full p-2 border border-gray-300 rounded-lg">
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" wire:model="image" id="image" class="block w-full p-2 border border-gray-300 rounded-lg">
            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <?php if($image): ?>
                <img src="<?php echo e($image->temporaryUrl()); ?>" class="w-16 h-16 object-cover rounded">
            <?php endif; ?>
        </div>
        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input type="number" wire:model="price" id="price" class="block w-full p-2 border border-gray-300 rounded-lg">
            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="flex justify-end">
            <button type="button" wire:click="$emit('closeModal')" class="py-2 px-4 bg-gray-500 hover:bg-gray-600 rounded-lg text-white shadow-md mr-2">Cancel</button>
            <button type="submit" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded-lg text-white shadow-md">Save</button>
        </div>
    </form>
</div><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\product-form.blade.php ENDPATH**/ ?>