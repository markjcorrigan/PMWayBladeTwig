<div class="container py-md-5 container--narrow">
    <div class="d-flex justify-content-between">
        <?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('message')); ?>

        </div>
        <?php endif; ?>


        <h2><?php echo e($post->title); ?></h2>
        <div class="d-inline-flex align-items-center">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update post', $post)): ?>
            <a wire:navigate href="/post/<?php echo e($post->id); ?>/edit" class="text-primary mr-2" data-toggle="tooltip"
                data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete post', $post)): ?>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('deletepost', ['post' => $post]);

$__html = app('livewire')->mount($__name, $__params, 'lw-330576994-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <?php endif; ?>
        </div>

    </div>
    <p class="text-muted small mb-4">
        <a wire:navigate href="/profile/<?php echo e($post->user->name); ?>"><img class="avatar-tiny"
                src="<?php echo e($post->user->avatar); ?>" /></a>
        Posted by <a wire:navigate href="/profile/<?php echo e($post->user->name); ?>"><?php echo e($post->user->username); ?></a> on
        <?php echo e($post->created_at->format('n/j/Y')); ?>

    </p>
    <?php if($post->photo): ?>
    <img src="/<?php echo e($post->photo); ?>" alt="Post Photo" class="img-fluid mb-4">

    <?php endif; ?>
    <div class="body-content">
        <?php echo $post->post_description; ?>



    </div>
</div>


<?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\singlepost.blade.php ENDPATH**/ ?>