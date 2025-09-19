<div class="m-auto w-1/2 mb-4">
    <div class="mb-3 flex justify-between items-center">
        <a
            href="/dashboard/articles/create"
            class="text-blue-500 hover:text-blue-700"
            wire:navigate
        >
            Create Article
        </a>
        <div>
            <button class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'text-gray-200 p-2 hover:bg-blue-900 rounded-sm',
                    'bg-gray-700' => $showOnlyPublished,
                    'bg-blue-700' => !$showOnlyPublished,
                ]); ?>"
                wire:click="togglePublished(false)"
            >
                Show All
            </button>
            <button class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'text-gray-200 p-2 hover:bg-blue-900 rounded-sm',
                    'bg-blue-700' => $showOnlyPublished,
                    'bg-gray-700' => !$showOnlyPublished,
                ]); ?>"
                wire:click="togglePublished(true)"
            >
                Show Published (<?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('published-count', ['placeholderText' => 'loading']);

$__html = app('livewire')->mount($__name, $__params, 'lw-151165727-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>)
            </button>
        </div>


    </div>
    <?php if(session('status')): ?>
        <div class="text-center bg-green-700 text-gray-200">
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    <div class="my-3">
        <?php echo e($this->articles->links()); ?>

    </div>
    <table class="w-full">
        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
            <tr>
                <th class="px-6 py-3">Title</th>
                <th class="px-6 py-3"></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $this->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr wire:key="<?php echo e($article->id); ?>" class="border-b bg-gray-800 border-gray-700">
                    <td class="px-6 py-3"><?php echo e($article->title); ?></td>
                    <td class="px-6 py-3">
                        <a class="text-gray-200 p-2"
                            href="/dashboard/articles/<?php echo e($article->id); ?>/edit"
                            wire:navigate
                        >
                            Edit
                        </a>
                        <button class="text-gray-200 p-2 bg-red-700 hover:bg-red-900 rounded-sm"
                            wire:click="delete(<?php echo e($article->id); ?>)"
                            wire:confirm="Are you sure you want to delete this article?"
                        >
                            Delete
                        </button>

                    </td>

                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="mt-3">
        <?php echo e($this->articles->links()); ?>

    </div>
</div><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\article-list.blade.php ENDPATH**/ ?>