<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php

    $approvedCount = \App\Models\BlogPost::approvedCount();

    ?>

    <div class="col-lg-10 offset-lg-1 py-3 py-md-5">
        <h4 class="display-4 lead text-muted">Remember Writing?</h4>
        <div wire:ignore>
            <p class="lead text-muted">Are you sick of short tweets and impersonal &ldquo;shared&rdquo; posts that
                are reminiscent of the late 90&rsquo;s email forwards? We believe getting back to actually writing is
                the key to enjoying the internet again. Our users have authored <?php echo e($approvedCount); ?> posts.</p>
            <p class="lead text-muted">Your feed below displays the latest posts from the people you follow. If you
                don&rsquo;t have any friends to follow that&rsquo;s okay; you can use the &ldquo;Search&rdquo;
                feature in the top menu bar to find content written by people with similar interests and then follow
                them.
            </p>
        </div>


    </div>

    <div class="container py-md-5 container">
        <h2><img class="avatar-small" src="<?php echo e(auth()->user()->avatar); ?>" /><?php echo e(auth()->user()->name); ?></h2>
        <p>Below is your feed
            of posts you are following:</p>
        <?php if (! ($posts->isEmpty())): ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('post-following-list', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1373492262-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        <?php else: ?>
        <div class="text-center">
            <h2>Hello <strong><?php echo e(auth()->user()->name); ?></strong>, your feed is empty.</h2>
        </div>
        <?php endif; ?>



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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\homepage-feed.blade.php ENDPATH**/ ?>