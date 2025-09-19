<div class="list-group">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if (isset($component)) { $__componentOriginalc880258d164458b70db424b6a6e11dfc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc880258d164458b70db424b6a6e11dfc = $attributes; } ?>
<?php $component = App\View\Components\Post::resolve(['post' => $post] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('post'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Post::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc880258d164458b70db424b6a6e11dfc)): ?>
<?php $attributes = $__attributesOriginalc880258d164458b70db424b6a6e11dfc; ?>
<?php unset($__attributesOriginalc880258d164458b70db424b6a6e11dfc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc880258d164458b70db424b6a6e11dfc)): ?>
<?php $component = $__componentOriginalc880258d164458b70db424b6a6e11dfc; ?>
<?php unset($__componentOriginalc880258d164458b70db424b6a6e11dfc); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="d-flex justify-content-between align-items-center">
        <div>
            Showing <?php echo e($posts->firstItem()); ?> to <?php echo e($posts->lastItem()); ?> of <?php echo e($posts->total()); ?> posts
        </div>
        <ul class="pagination">
            <?php if(!$posts->onFirstPage()): ?>
            <li class="page-item">
                <button wire:click="previousPage" class="page-link">
                    < </button>
            </li>
            <?php else: ?>
            <li class="page-item disabled">
                <span class="page-link">
                    < </span>
            </li>
            <?php endif; ?>
            <?php for($i = 1; $i <= $posts->lastPage(); $i++): ?>
                <?php if($i == $posts->currentPage()): ?>
                <li class="page-item active">
                    <span class="page-link"><?php echo e($i); ?></span>
                </li>
                <?php else: ?>
                <li class="page-item">
                    <button wire:click="gotoPage(<?php echo e($i); ?>)" class="page-link"><?php echo e($i); ?></button>
                </li>
                <?php endif; ?>
                <?php endfor; ?>
                <?php if($posts->hasMorePages()): ?>
                <li class="page-item">
                    <button wire:click="nextPage" class="page-link">></button>
                </li>
                <?php else: ?>
                <li class="page-item disabled">
                    <span class="page-link">></span>
                </li>
                <?php endif; ?>


        </ul>

    </div>
</div>

<?php
$this->dispatch('postCount', postCount: $postCount);
?><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\post-following-list.blade.php ENDPATH**/ ?>