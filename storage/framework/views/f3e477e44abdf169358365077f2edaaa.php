<div class="list-group">
    <?php $__currentLoopData = $followers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $follow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="/profile/<?php echo e($follow->userDoingTheFollowing->name); ?>" class="list-group-item list-group-item-action">
        <img class="avatar-tiny" src="<?php echo e($follow->userDoingTheFollowing->avatar); ?>" />
        <?php echo e($follow->userDoingTheFollowing->name); ?>

    </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH C:\xampp\htdocs\pmway\resources\views\profile-followers-only.blade.php ENDPATH**/ ?>