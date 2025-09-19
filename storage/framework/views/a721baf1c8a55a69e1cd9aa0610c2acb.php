<?php if (isset($component)) { $__componentOriginal01a61da3607d9d461eaca4c952839085 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal01a61da3607d9d461eaca4c952839085 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app.frontend','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app.frontend'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('contact-form');

$__html = app('livewire')->mount($__name, $__params, 'lw-1591006093-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <br><br>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal01a61da3607d9d461eaca4c952839085)): ?>
<?php $attributes = $__attributesOriginal01a61da3607d9d461eaca4c952839085; ?>
<?php unset($__attributesOriginal01a61da3607d9d461eaca4c952839085); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal01a61da3607d9d461eaca4c952839085)): ?>
<?php $component = $__componentOriginal01a61da3607d9d461eaca4c952839085; ?>
<?php unset($__componentOriginal01a61da3607d9d461eaca4c952839085); ?>
<?php endif; ?>


<?php /**PATH C:\xampp\htdocs\pmway\resources\views\contact.blade.php ENDPATH**/ ?>