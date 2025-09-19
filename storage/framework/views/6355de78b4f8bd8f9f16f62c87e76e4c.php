<div class="text-center">
    <a wire:click="vote(1)" href="#">
        <i class="fa fa-2x fa-sort-asc <?php echo e($blogpost->votes()->where('user_id', auth()->id())->exists() && $blogpost->votes()->where('user_id', auth()->id())->first()->vote == 1 ? 'text-green-500' : ''); ?>" aria-hidden="true"></i>
    </a>
    <div class="text-3xl"><?php echo e($blogpost->votes()->sum('vote')); ?></div>
    <a wire:click="vote(-1)" href="#">
        <i class="fa fa-2x fa-sort-desc <?php echo e($blogpost->votes()->where('user_id', auth()->id())->exists() && $blogpost->votes()->where('user_id', auth()->id())->first()->vote == -1 ? 'text-red-500' : ''); ?>" aria-hidden="true"></i>
    </a>
</div>

<?php /**PATH C:\xampp\htdocs\pmway\resources\views/livewire/blogpost-votes.blade.php ENDPATH**/ ?>