<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['doctitle' => $doctitle]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['doctitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($doctitle)]); ?>
  <div class="container py-md-5 container--narrow">
  
      <h2>
        <img class="avatar-small" src="<?php echo e($sharedData['avatar']); ?>" /> <?php echo e($sharedData['name']); ?>

        <?php if(auth()->guard()->check()): ?>
        <?php if(!$sharedData['currentlyFollowing'] AND auth()->user()->name != $sharedData['name']): ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('addfollow', ['name' => $sharedData['name']]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2158863610-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php endif; ?>

        <?php if($sharedData['currentlyFollowing']): ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('removefollow', ['name' => $sharedData['name']]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2158863610-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php endif; ?>

        <?php if(auth()->user()->name == $sharedData['name']): ?>
          <a wire:navigate href="/manage-avatar" class="btn btn-secondary btn-sm">Manage Avatar</a>
          <?php endif; ?>
        <?php endif; ?>
      </h2>

      <div class="profile-nav nav nav-tabs pt-2 mb-4">
        <a wire:navigate href="/profile/<?php echo e($sharedData['name']); ?>" class="profile-nav-link nav-item nav-link <?php echo e(Request::segment(3) == "" ? "active" : ""); ?>">Posts: <?php echo e($sharedData['postCount']); ?></a>
        <a wire:navigate href="/profile/<?php echo e($sharedData['name']); ?>/followers" class="profile-nav-link nav-item nav-link <?php echo e(Request::segment(3) == "followers" ? "active" : ""); ?>">Followers: <?php echo e($sharedData['followerCount']); ?></a>
        <a wire:navigate href="/profile/<?php echo e($sharedData['name']); ?>/following" class="profile-nav-link nav-item nav-link <?php echo e(Request::segment(3) == "following" ? "active" : ""); ?>">Following: <?php echo e($sharedData['followingCount']); ?></a>
      </div>

      <div class="profile-slot-content">
        <?php echo e($slot); ?>



      </div>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\pmway\resources\views\components\layouts\profile.blade.php ENDPATH**/ ?>