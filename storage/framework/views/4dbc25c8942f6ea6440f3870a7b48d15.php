<?php if (isset($component)) { $__componentOriginal5a2bbd0fc262bb39fed3532418250e13 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a2bbd0fc262bb39fed3532418250e13 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.profile','data' => ['sharedData' => $sharedData,'doctitle' => ''.e($sharedData['name']).'\'s Profile']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sharedData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sharedData),'doctitle' => ''.e($sharedData['name']).'\'s Profile']); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('post-list', ['name' => $sharedData['name']]);

$__html = app('livewire')->mount($__name, $__params, 'lw-804140694-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5a2bbd0fc262bb39fed3532418250e13)): ?>
<?php $attributes = $__attributesOriginal5a2bbd0fc262bb39fed3532418250e13; ?>
<?php unset($__attributesOriginal5a2bbd0fc262bb39fed3532418250e13); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5a2bbd0fc262bb39fed3532418250e13)): ?>
<?php $component = $__componentOriginal5a2bbd0fc262bb39fed3532418250e13; ?>
<?php unset($__componentOriginal5a2bbd0fc262bb39fed3532418250e13); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\profile-posts.blade.php ENDPATH**/ ?>