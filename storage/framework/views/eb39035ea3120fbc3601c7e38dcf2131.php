<div class="m-auto w-1/2 mb-4">
    <h3 class="text-lg text-gray-200 mb-3">Create Article</h3>
    <form wire:submit="save">
        <div class="mb-3">
            <label class="block" for="article-title">Title</label>
            <input
                type="text"
                class="p-2 w-full border rounded-md bg-gray-700 text-white"
                wire:model="form.title"
            >
            <div>
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-600""><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="mb-3">
            <label class="block" for="article-content">Content</label>
            <textarea
                id="article-content"
                class="p-2 w-full border rounded-md bg-gray-700 text-white"
                wire:model="form.content"
            ></textarea>
            <div>
                <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-600"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="mb-3">
            <label class="block" for="article-content">
                Photo
            </label>
            <div class="flex items-center">
                <input type="file"
                       wire:model="form.photo"
                       multiple
                >
                <div>
                    <?php if($form->photo): ?>
                        <img class="w-1/2" src="<?php echo e($form->photo->temporaryUrl()); ?>">
                    <?php endif; ?>
                </div>
            </div>
            <div>
                <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-600"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        <div class="mb-3">
            <label class="flex items-center">
                <input type="checkbox" name="published"
                    class="mr-2"
                    wire:model.boolean="form.published"
                >
                Published
            </label>
        </div>
        <div class="mb-3">
            <div>
                <div class="mb-2">Notification Options</div>
                <div class="flex gap-6 mb-3">
                    <label class="flex items-center">
                        <input type="radio" value="true" class="mr-2"
                               wire:model.boolean="form.allowNotifications"
                        >
                        Yes
                    </label>
                    <label class="flex items-center">
                        <input type="radio" value="false" class="mr-2"
                               wire:model.boolean="form.allowNotifications"
                        >
                        No
                    </label>
                </div>
                <div x-show="$wire.form.allowNotifications">
                    <label class="flex items-center">
                        <input type="checkbox" value="email" class="mr-2"
                               wire:model="form.notifications"
                        >
                        Email
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" value="sms" class="mr-2"
                               wire:model="form.notifications"
                        >
                        SMS
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" value="push" class="mr-2"
                               wire:model="form.notifications"
                        >
                        Push
                    </label>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <button
                class="text-gray-200 p-2 bg-blue-700 rounded-sm disabled:opacity-75 disabled:bg-blue-300"
                type="submit"
                wire:dirty.class="hover:bg-blue-900"
                wire:dirty.remove.attr="disabled"
                disabled
            >
                Save
            </button>
        </div>
    </form>
</div><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\create-article.blade.php ENDPATH**/ ?>