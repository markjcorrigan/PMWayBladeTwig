
<div class="d-flex justify-content-end">
    <ul class="pagination">
        <?php if(!$posts->onFirstPage()): ?>
            <li class="page-item">
                <button wire:click="previousPage" class="page-link"><</button>
            </li>
        <?php else: ?>
            <li class="page-item disabled">
                <span class="page-link"><</span>
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
<?php /**PATH C:\xampp\htdocs\pmway\resources\views\profile-posts-only.blade.php ENDPATH**/ ?>