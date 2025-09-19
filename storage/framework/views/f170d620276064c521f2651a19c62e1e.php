<div class="text-center">
    <a wire:click="vote(1)" href="#"><i class="fa fa-2x fa-sort-asc" aria-hidden="true"></i></a>
    <div class="text-3xl"><?php echo e($blogpost->votes()->sum('vote')); ?></div>
    <a wire:click="vote(-1)" href="#"><i class="fa fa-2x fa-sort-desc" aria-hidden="true"></i></a>
</div><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\blogpost-votes.blade.php ENDPATH**/ ?>