<div class="flex flex-col min-h-screen">
    <div class="flex-grow">
        <!-- your search results container -->
        <div class="mt-4 p-4 border rounded-md bg-gray-50000 border-indigo-600">
            <?php if(count($results) == 0): ?>
                <p>No results found.</p>
            <?php endif; ?>
            <p class="text-white">Click a result below to go to that post:</p>
            <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="pt-2" wire:key="<?php echo e($result->id); ?>">
                    <h2 class="text-2xl text-white font-bold"><a href="/post/details/<?php echo e($result->id); ?>">Post Title:&nbsp;&nbsp; <u><?php echo e($result->post_title); ?></u></a></h2>

                    <p class="text-white  text-wrap" style="word-wrap: break-word;">
                        <a href="/post/details/<?php echo e($result->id); ?>">Post Detail (Shortened):&nbsp;&nbsp; <?php echo e(substr($result->post_description, 0, 200)); ?>...</a>
                    </p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\search-results.blade.php ENDPATH**/ ?>