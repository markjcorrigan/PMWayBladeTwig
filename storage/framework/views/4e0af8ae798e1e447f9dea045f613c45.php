


<?php if (isset($component)) { $__componentOriginal5a2bbd0fc262bb39fed3532418250e13 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5a2bbd0fc262bb39fed3532418250e13 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.profile','data' => ['sharedData' => $sharedData,'doctitle' => 'Who '.e($sharedData['name']).' Follows']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('profile'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['sharedData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sharedData),'doctitle' => 'Who '.e($sharedData['name']).' Follows']); ?>
  <div class="list-group">
    <?php $__currentLoopData = $following; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $follow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a wire:navigate href="/profile/<?php echo e($follow->userBeingFollowed->name); ?>"
      class="list-group-item list-group-item-action">
      <img class="avatar-tiny" src="<?php echo e($follow->userBeingFollowed->avatar); ?>" />
      <?php echo e($follow->userBeingFollowed->name); ?>

    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5a2bbd0fc262bb39fed3532418250e13)): ?>
<?php $attributes = $__attributesOriginal5a2bbd0fc262bb39fed3532418250e13; ?>
<?php unset($__attributesOriginal5a2bbd0fc262bb39fed3532418250e13); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5a2bbd0fc262bb39fed3532418250e13)): ?>
<?php $component = $__componentOriginal5a2bbd0fc262bb39fed3532418250e13; ?>
<?php unset($__componentOriginal5a2bbd0fc262bb39fed3532418250e13); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\profile-following.blade.php ENDPATH**/ ?>