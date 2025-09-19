<?php $__env->startSection('header'); ?>
    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
    <?php $__env->startSection('title', 'All Documents'); ?>
    <?php if (isset($component)) { $__componentOriginal92577d719d69619a2d04feca11573870 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal92577d719d69619a2d04feca11573870 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.documentsnav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('documentsnav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal92577d719d69619a2d04feca11573870)): ?>
<?php $attributes = $__attributesOriginal92577d719d69619a2d04feca11573870; ?>
<?php unset($__attributesOriginal92577d719d69619a2d04feca11573870); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal92577d719d69619a2d04feca11573870)): ?>
<?php $component = $__componentOriginal92577d719d69619a2d04feca11573870; ?>
<?php unset($__componentOriginal92577d719d69619a2d04feca11573870); ?>
<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('maincontent'); ?>
    <main>
        <div class="container mx-auto p-4 mt-10">
            <?php if(session()->has('success')): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    <?php echo e(session()->get('success')); ?>

                </div>
            <?php endif; ?>
            <?php if(session()->has('error')): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <?php echo e(session()->get('error')); ?>

                </div>
            <?php endif; ?>
            <h1 class="text-3xl font-bold mb-4">All Documents</h1>







                <br>
            <form action="<?php echo e(route('upload')); ?>" method="POST" enctype="multipart/form-data" class="mb-8">
                <?php echo csrf_field(); ?>
                <input type="file" name="document" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                <br><button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Upload</button>
            </form>
            <table class="w-full table-auto border-collapse border border-gray-400">
                <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-400 px-4 py-2">Name</th>
                    <th class="border border-gray-400 px-4 py-2">Short Name</th>
                    <th class="border border-gray-400 px-4 py-2">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="border border-gray-400 px-4 py-2"><?php echo e($document->name); ?></td>
                        <td class="border border-gray-400 px-4 py-2"><?php echo e($document->shortname); ?></td>
                        <td class="border border-gray-400 px-4 py-2 flex">
                            <a href="<?php echo e(route('downloadByShortName', $document->shortname)); ?>" class="flex-1 bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded mr-2 text-center">Download</a>
                            <a href="<?php echo e(route('documents.edit', $document->id)); ?>" class="flex-1 bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded mr-2 text-center">Edit</a>
                            <form action="<?php echo e(route('documents.destroy', $document->id)); ?>" method="POST" class="flex-1">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="w-full bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-center">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($documents->links()); ?>

            <?php if(session()->has('success')): ?>
                <p class="text-green-500 mt-4"><?php echo e(session('success')); ?></p>
            <?php endif; ?>
        </div>
        <br><br><br><br>
        <br><br><br><br>
    </main>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>























        <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('documents.documentlayout.default', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\documents\uploads.blade.php ENDPATH**/ ?>