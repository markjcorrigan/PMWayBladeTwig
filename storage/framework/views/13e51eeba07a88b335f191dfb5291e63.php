<div class="flex flex-col gap-6">
    <?php if (isset($component)) { $__componentOriginale5d2f2831f58fdbe96ad6d7cbd41a7dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale5d2f2831f58fdbe96ad6d7cbd41a7dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-header','data' => ['title' => ''.e(__('global.log_into_your_account')).'','description' => ''.e(__('global.log_into_your_account_text')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth-header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(__('global.log_into_your_account')).'','description' => ''.e(__('global.log_into_your_account_text')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale5d2f2831f58fdbe96ad6d7cbd41a7dd)): ?>
<?php $attributes = $__attributesOriginale5d2f2831f58fdbe96ad6d7cbd41a7dd; ?>
<?php unset($__attributesOriginale5d2f2831f58fdbe96ad6d7cbd41a7dd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale5d2f2831f58fdbe96ad6d7cbd41a7dd)): ?>
<?php $component = $__componentOriginale5d2f2831f58fdbe96ad6d7cbd41a7dd; ?>
<?php unset($__componentOriginale5d2f2831f58fdbe96ad6d7cbd41a7dd); ?>
<?php endif; ?>
    <!-- Session Status -->
    <?php if (isset($component)) { $__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.auth-session-status','data' => ['class' => 'text-center','status' => session('status')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-center','status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(session('status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5)): ?>
<?php $attributes = $__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5; ?>
<?php unset($__attributesOriginal7c1bf3a9346f208f66ee83b06b607fb5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5)): ?>
<?php $component = $__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5; ?>
<?php unset($__componentOriginal7c1bf3a9346f208f66ee83b06b607fb5); ?>
<?php endif; ?>
    <form wire:submit="login" class="flex flex-col gap-6">
        <!-- Email Address -->
        <?php if (isset($component)) { $__componentOriginal26c546557cdc09040c8dd00b2090afd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26c546557cdc09040c8dd00b2090afd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::input.index','data' => ['wire:model' => 'email','label' => __('global.email_address'),'type' => 'email','name' => 'email','required' => true,'autocomplete' => 'email','placeholder' => 'email@example.com']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'email','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('global.email_address')),'type' => 'email','name' => 'email','required' => true,'autocomplete' => 'email','placeholder' => 'email@example.com']); ?>
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
        <!-- Password -->
        <?php if (isset($component)) { $__componentOriginal26c546557cdc09040c8dd00b2090afd0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal26c546557cdc09040c8dd00b2090afd0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::input.index','data' => ['wire:model' => 'password','label' => __('global.password'),'type' => $this->passwordVisible ? 'text' : 'password','name' => 'password','required' => true,'autocomplete' => 'current-password','placeholder' => 'Password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'password','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('global.password')),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->passwordVisible ? 'text' : 'password'),'name' => 'password','required' => true,'autocomplete' => 'current-password','placeholder' => 'Password']); ?>
             <?php $__env->slot('iconTrailing', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['size' => 'sm','variant' => 'subtle','icon' => ''.e($this->passwordVisible ? 'eye-slash' : 'eye').'','class' => '-mr-1','wire:click.prevent' => '$toggle(\'passwordVisible\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','variant' => 'subtle','icon' => ''.e($this->passwordVisible ? 'eye-slash' : 'eye').'','class' => '-mr-1','wire:click.prevent' => '$toggle(\'passwordVisible\')']); ?>
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
             <?php $__env->endSlot(); ?>
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
        <!--[if BLOCK]><![endif]--><?php if(Route::has('password.request')): ?>
            <?php if (isset($component)) { $__componentOriginal54ddb5b70b37b1e1cf0f2f95e4c53477 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54ddb5b70b37b1e1cf0f2f95e4c53477 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::link','data' => ['class' => 'text-sm','href' => route('password.request'),'wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-sm','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('password.request')),'wire:navigate' => true]); ?>
                <?php echo e(__('global.forgot_password')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54ddb5b70b37b1e1cf0f2f95e4c53477)): ?>
<?php $attributes = $__attributesOriginal54ddb5b70b37b1e1cf0f2f95e4c53477; ?>
<?php unset($__attributesOriginal54ddb5b70b37b1e1cf0f2f95e4c53477); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54ddb5b70b37b1e1cf0f2f95e4c53477)): ?>
<?php $component = $__componentOriginal54ddb5b70b37b1e1cf0f2f95e4c53477; ?>
<?php unset($__componentOriginal54ddb5b70b37b1e1cf0f2f95e4c53477); ?>
<?php endif; ?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <!-- Remember Me -->
        <?php if (isset($component)) { $__componentOriginal9384bd05e996fcc8c16dc84e6bbc1c8f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9384bd05e996fcc8c16dc84e6bbc1c8f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::checkbox.index','data' => ['wire:model' => 'remember','label' => __('global.remember_me')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'remember','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('global.remember_me'))]); ?>
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
        <div class="flex items-center justify-end">
            <?php if (isset($component)) { $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::button.index','data' => ['variant' => 'primary','type' => 'submit','class' => 'w-full']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['variant' => 'primary','type' => 'submit','class' => 'w-full']); ?><?php echo e(__('global.log_in')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $attributes = $__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__attributesOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580)): ?>
<?php $component = $__componentOriginalc04b147acd0e65cc1a77f86fb0e81580; ?>
<?php unset($__componentOriginalc04b147acd0e65cc1a77f86fb0e81580); ?>
<?php endif; ?>
        </div>
    </form>
    <!--[if BLOCK]><![endif]--><?php if(Route::has('register')): ?>
        <div class="space-x-1 text-center text-sm text-zinc-600 dark:text-zinc-400">
            <span><?php echo e(__('global.dont_have_an_account')); ?></span>
            <?php if (isset($component)) { $__componentOriginal54ddb5b70b37b1e1cf0f2f95e4c53477 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54ddb5b70b37b1e1cf0f2f95e4c53477 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::link','data' => ['href' => route('register'),'wire:navigate' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('register')),'wire:navigate' => true]); ?>
                <?php echo e(__('global.sign_up')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54ddb5b70b37b1e1cf0f2f95e4c53477)): ?>
<?php $attributes = $__attributesOriginal54ddb5b70b37b1e1cf0f2f95e4c53477; ?>
<?php unset($__attributesOriginal54ddb5b70b37b1e1cf0f2f95e4c53477); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54ddb5b70b37b1e1cf0f2f95e4c53477)): ?>
<?php $component = $__componentOriginal54ddb5b70b37b1e1cf0f2f95e4c53477; ?>
<?php unset($__componentOriginal54ddb5b70b37b1e1cf0f2f95e4c53477); ?>
<?php endif; ?>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div>

<?php /**PATH C:\xampp\htdocs\pmway\resources\views/livewire/auth/login.blade.php ENDPATH**/ ?>