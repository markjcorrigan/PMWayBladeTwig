<div class="container mx-auto py-16 px-8">
    <?php if($productDeletedMessage): ?>
        <div class="alert alert-success">
            <?php echo e($productDeletedMessage); ?>

        </div>
    <?php endif; ?>
    <?php if($productSavedMessage): ?>
        <div class="alert alert-success">
            <?php echo e($productSavedMessage); ?>

        </div>
    <?php endif; ?>
    <script>
        document.addEventListener('livewire:load', () => {
        window.Livewire.find('<?php echo e($_instance->getId()); ?>').on('showMessage', () => {
            setTimeout(() => {
            window.Livewire.find('<?php echo e($_instance->getId()); ?>').resetMessages()
            }, 3000);
        });
        });
    </script>
        <div class="mb-4 flex justify-between">
            <div class="flex">
                <input type="text" wire:model.live="search" placeholder="Search for Products" class="w-full py-2 px-4 rounded-l-lg border border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                <?php if($search): ?>
                    <button wire:click="$set('search', '')" class="py-2 px-4 bg-gray-200 hover:bg-gray-300 rounded-r-lg text-gray-600 shadow-sm">Clear</button>
                <?php endif; ?>
            </div>
            <button wire:click="create" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded-lg text-white shadow-md">Add Product</button>
        </div>


        <table class="table-auto w-full border-collapse border border-gray-200">
        <thead>
        <tr>
            <th class="py-2 px-3 bg-gray-100 border-b-2 border-gray-200 text-left text-gray-600">ID</th>
            <th class="py-2 px-3 bg-gray-100 border-b-2 border-gray-200 text-left text-gray-600">Image</th>
            <th class="py-2 px-3 bg-gray-100 border-b-2 border-gray-200 text-left text-gray-600">Title</th>
            <th class="py-2 px-3 bg-gray-100 border-b-2 border-gray-200 text-left text-gray-600">Price</th>
            <th class="py-2 px-3 bg-gray-100 border-b-2 border-gray-200 text-left text-gray-600">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="py-2 px-3 border-b border-gray-200"><?php echo e($product->id); ?></td>
                <td class="py-2 px-3 border-b border-gray-200">
                    <img class="w-16 h-16 object-cover rounded" src="<?php echo e(asset('storage/' . $product->image)); ?>">
                </td>
                <td class="py-2 px-3 border-b border-gray-200"><?php echo e($product->title); ?></td>
                <td class="py-2 px-3 border-b border-gray-200"><?php echo e($product->price); ?></td>
                <td class="py-2 px-3 border-b border-gray-200">
                    <button wire:click="edit(<?php echo e($product->id); ?>)" class="py-1 px-2 bg-blue-500 hover:bg-blue-600 rounded-lg text-white shadow-md">Edit</button>
                    <button wire:click="delete(<?php echo e($product->id); ?>)" class="py-1 px-2 bg-red-500 hover:bg-red-600 rounded-lg text-white shadow-md">Delete</button>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="mt-4">
        <?php echo e($products->links()); ?>

    </div>
    <?php if($isOpen): ?>
        <?php echo $__env->make('livewire.product-form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\products-search.blade.php ENDPATH**/ ?>