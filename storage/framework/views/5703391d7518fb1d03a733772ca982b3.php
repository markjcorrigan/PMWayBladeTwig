<section class="w-full">
    <?php if (isset($component)) { $__componentOriginal8026f1991abb42645b4d7cc7ace47942 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8026f1991abb42645b4d7cc7ace47942 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-heading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
         <?php $__env->slot('title', null, []); ?> 
            <?php echo e(__('roles.edit_role')); ?>

         <?php $__env->endSlot(); ?>
         <?php $__env->slot('subtitle', null, []); ?> 
            <?php echo e(__('roles.edit_role_description')); ?>

         <?php $__env->endSlot(); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8026f1991abb42645b4d7cc7ace47942)): ?>
<?php $attributes = $__attributesOriginal8026f1991abb42645b4d7cc7ace47942; ?>
<?php unset($__attributesOriginal8026f1991abb42645b4d7cc7ace47942); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8026f1991abb42645b4d7cc7ace47942)): ?>
<?php $component = $__componentOriginal8026f1991abb42645b4d7cc7ace47942; ?>
<?php unset($__componentOriginal8026f1991abb42645b4d7cc7ace47942); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form','data' => ['wire:submit' => 'editRole','class' => 'space-y-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:submit' => 'editRole','class' => 'space-y-6']); ?>
        <?php if (isset($component)) { $__componentOriginal26c546557cdc09040c8dd00b2090afd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26c546557cdc09040c8dd00b2090afd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::input.index','data' => ['wire:model.live' => 'name','label' => ''.e(__('roles.name')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'name','label' => ''.e(__('roles.name')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal26c546557cdc09040c8dd00b2090afd0)): ?>
<?php $attributes = $__attributesOriginal26c546557cdc09040c8dd00b2090afd0; ?>
<?php unset($__attributesOriginal26c546557cdc09040c8dd00b2090afd0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal26c546557cdc09040c8dd00b2090afd0)): ?>
<?php $component = $__componentOriginal26c546557cdc09040c8dd00b2090afd0; ?>
<?php unset($__componentOriginal26c546557cdc09040c8dd00b2090afd0); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal3969065b33d8f849854f52e7f2dcea0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3969065b33d8f849854f52e7f2dcea0a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::checkbox.group.index','data' => ['wire:model.live' => 'selectedPermissions','label' => ''.e(__('roles.permissions')).'','description' => ''.e(__('roles.permissions_description')).'','class' => 'grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::checkbox.group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.live' => 'selectedPermissions','label' => ''.e(__('roles.permissions')).'','description' => ''.e(__('roles.permissions_description')).'','class' => 'grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3']); ?>
            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal9384bd05e996fcc8c16dc84e6bbc1c8f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9384bd05e996fcc8c16dc84e6bbc1c8f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::checkbox.index','data' => ['label' => ''.e($permission->name).'','value' => ''.e($permission->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => ''.e($permission->name).'','value' => ''.e($permission->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9384bd05e996fcc8c16dc84e6bbc1c8f)): ?>
<?php $attributes = $__attributesOriginal9384bd05e996fcc8c16dc84e6bbc1c8f; ?>
<?php unset($__attributesOriginal9384bd05e996fcc8c16dc84e6bbc1c8f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9384bd05e996fcc8c16dc84e6bbc1c8f)): ?>
<?php $component = $__componentOriginal9384bd05e996fcc8c16dc84e6bbc1c8f; ?>
<?php unset($__componentOriginal9384bd05e996fcc8c16dc84e6bbc1c8f); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3969065b33d8f849854f52e7f2dcea0a)): ?>
<?php $attributes = $__attributesOriginal3969065b33d8f849854f52e7f2dcea0a; ?>
<?php unset($__attributesOriginal3969065b33d8f849854f52e7f2dcea0a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3969065b33d8f849854f52e7f2dcea0a)): ?>
<?php $component = $__componentOriginal3969065b33d8f849854f52e7f2dcea0a; ?>
<?php unset($__componentOriginal3969065b33d8f849854f52e7f2dcea0a); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['type' => 'submit','icon' => 'save','variant' => 'primary']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'submit','icon' => 'save','variant' => 'primary']); ?>
            <?php echo e(__('roles.update_role')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab)): ?>
<?php $attributes = $__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab; ?>
<?php unset($__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab)): ?>
<?php $component = $__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab; ?>
<?php unset($__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab); ?>
<?php endif; ?>
</section><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\admin\roles\edit-role.blade.php ENDPATH**/ ?>