<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
'sortable' => null,
'direction' => null
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
'sortable' => null,
'direction' => null
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<th <?php echo e($attributes->merge(['class' => 'py-3 px-6 text-left dark:bg-zinc-700 border-b dark:dark:border-zinc-500'])->only('class')); ?>

>
    <?php if (! ($sortable)): ?>
        <span class="text-left text-xs leading-4 font-medium uppercase tracking-wider"><?php echo e($slot); ?></span>
    <?php else: ?>
        <button
            <?php echo e($attributes->except('class')); ?> class="flex items-center space-x-1 text-left text-xs leading-4 font-medium">

            <span> <?php echo e($slot); ?></span>

            <span>
                <?php if($direction === 'asc'): ?>
                    <svg viewBox="0 0 8 6" width="8" height="6" fill="none"
                         class="absolute inset-y-0 right-3.5 h-full pointer-events-none">
                      <path d="M7 1.5l-3 3-3-3" stroke="#9CA3AF" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                <?php elseif($direction === 'desc'): ?>
                    DESC
                <?php else: ?>

                <?php endif; ?>
            </span>

        </button>

    <?php endif; ?>
</th>
<?php /**PATH C:\xampp\htdocs\pmway\resources\views\components\table\heading.blade.php ENDPATH**/ ?>