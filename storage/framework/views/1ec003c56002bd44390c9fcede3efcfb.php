<div class="w-full sm:max-w-2xl mt-6 mb-6 px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
    <button wire:click="sortByUpvotes" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Sort by Upvotes</button>
    <button wire:click="sortByLatest" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Sort by Latest</button>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div wire:key="post-<?php echo e($post->id); ?>">
            <div class="pb-3 pt-3 flex">
                <div class="w-2/12">
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('blogpost-votes', ['blogpost' => $post]);

$__html = app('livewire')->mount($__name, $__params, $post->id, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                </div>
                <div class="w-10/12">
                    <h3 class="text-2xl mb-1"><?php echo e($post->post_title); ?></h3>
                    <p class="mb-1"><?php echo e(\Illuminate\Support\Str::words($post->post_description, 30)); ?></p>
                </div>
            </div>
            <hr />
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\blog-post-list.blade.php ENDPATH**/ ?>