<?php if (isset($component)) { $__componentOriginal4fdfd22d5b98c4f9898705517a788e1a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4fdfd22d5b98c4f9898705517a788e1a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.auth.card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.auth.card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php echo e($slot); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4fdfd22d5b98c4f9898705517a788e1a)): ?>
<?php $attributes = $__attributesOriginal4fdfd22d5b98c4f9898705517a788e1a; ?>
<?php unset($__attributesOriginal4fdfd22d5b98c4f9898705517a788e1a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4fdfd22d5b98c4f9898705517a788e1a)): ?>
<?php $component = $__componentOriginal4fdfd22d5b98c4f9898705517a788e1a; ?>
<?php unset($__componentOriginal4fdfd22d5b98c4f9898705517a788e1a); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\pmway\resources\views/components/layouts/auth.blade.php ENDPATH**/ ?>