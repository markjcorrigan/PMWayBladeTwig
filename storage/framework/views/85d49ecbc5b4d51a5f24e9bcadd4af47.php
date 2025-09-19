<section class="w-full">
    
    

    <div class="container mx-auto p-4 md:p-6 lg:p-8 max-w-3xl">
        <?php if (! ($posts->isEmpty())): ?>
        <h2 class="text-2xl font-bold text-center mb-4">The latest from those you follow</h2>
        
        <div class="mt-4 flex justify-center">
            <?php echo e($posts->links('pagination::tailwind')); ?>

        </div>
        <div class="mt-8">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('post-following-list', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1797980749-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        </div>

        <?php else: ?>
        <div class="text-center">
            <h2 class="text-2xl font-bold mb-2">Hello <strong class="text-blue-500"><?php echo e(auth()->user()->name); ?></strong>,
                your feed is empty.</h2>
            <p class="text-lg text-gray-500">Your feed displays the latest posts from the people you follow. If you
                don&rsquo;t have any friends to follow that&rsquo;s okay; you can use the &ldquo;Search&rdquo; feature
                in
                the top menu bar to find content written by people with similar interests and then follow them.</p>


        <?php endif; ?>

        </div>

    </div>

</section><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\writefull.blade.php ENDPATH**/ ?>