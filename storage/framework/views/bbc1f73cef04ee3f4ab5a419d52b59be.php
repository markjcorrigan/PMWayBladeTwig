
<div class="container">
    <h1>Documents</h1>
    <form action="<?php echo e(route('documents')); ?>" method="GET">
        <input type="text" name="query" value="<?php echo e($query); ?>" placeholder="Search...">
        <button type="submit">Search</button>
    </form>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Name</th>
            <th>Download</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($document->name); ?></td>
                <td><a href="<?php echo e(route('download', $document->name)); ?>">Download</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\pmway\resources\views\documents\documents.blade.php ENDPATH**/ ?>