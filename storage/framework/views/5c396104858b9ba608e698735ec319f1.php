<div class="m-auto w-1/2">
    <div wire:offline>
        You are offline
    </div>


    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="mt-5 p-3" wire:key="<?php echo e($article->id); ?>">
        <h3 class="text-2xl text-blue-500 mb-3 hover:text-blue-700"
            wire:offline.class.remove="text-blue-500 hover:text-blue-700"
            wire:offline.class="bg-red-500"
        >
            <a href="/articles/<?php echo e($article->id); ?>"><?php echo e($article->title); ?></a>
        </h3>
        <p>
            <?php echo e(str($article->content)->words(30)); ?>

        </p>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\article-index.blade.php ENDPATH**/ ?>