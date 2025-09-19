<?php $__env->startSection('header'); ?>
    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
    <?php $__env->startSection('title', 'Edit Documents'); ?>

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

<h1 class="text-3xl font-bold mb-4 ml-24">Edit Document</h1>

<form action="<?php echo e(route('documents.update', $document->id)); ?>" method="POST" class="max-w-md mx-auto p-4 bg-white shadow-md rounded">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <label for="name" class="block text-sm font-medium text-gray-700">Document Name:</label>
    <input type="text" name="name" value="<?php echo e($document->name); ?>" class="block w-full p-2 mt-1 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500 mb-4">
    <label for="shortname" class="block text-sm font-medium text-gray-700">Short Name:</label>
    <input type="text" name="shortname" value="<?php echo e($document->shortname); ?>" class="block w-full p-2 mt-1 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500">
    <button type="submit" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save Changes</button>
</form>
    <br><br><br><br> <br><br><br><br><br>
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

<?php echo $__env->make('documents.documentlayout.default', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\documents\edit.blade.php ENDPATH**/ ?>