<a wire:navigate href="/post/<?php echo e($post->id); ?>" class="list-group-item list-group-item-action">
  <img class="avatar-tiny" src="<?php echo e($post->user->avatar); ?>" />
  <strong><?php echo e($post->post_title); ?></strong>
  <span class="text-muted small">
    <?php if(!isset($hideAuthor)): ?>
    by <?php echo e($post->user->name); ?>

    <?php endif; ?>
    on <?php echo e($post->created_at->format('n/j/Y')); ?>

  </span>
</a><?php /**PATH C:\xampp\htdocs\pmway\resources\views\components\post.blade.php ENDPATH**/ ?>