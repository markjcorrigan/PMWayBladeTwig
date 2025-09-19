<div>

    <form>
        <div class="mt-2">
            <input
                type="text"
                class="p-4 w-full border rounded-md bg-gray-700 text-white"
                wire:model.live.debounce="searchText"
                placeholder="<?php echo e($placeholder); ?>"
                wire:offline.attr="disabled"
            >
        </div>
    </form>

    <?php if(!empty($searchText)): ?>
        <div wire:transition>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('search-results', ['results' => $results]);

$__html = app('livewire')->mount($__name, $__params, 'lw-3109651158-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    <?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\lwsearch.blade.php ENDPATH**/ ?>