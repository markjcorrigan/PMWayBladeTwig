<div x-data="{ isOpen: false }">

<button x-on:click="isOpen = true; setTimeout(() => document.querySelector('#live-search-field').focus(), 50)"
        style="background: none; border: none; padding: 0; margin: 0; outline: none; cursor: pointer"
        class="text-white mr-2 header-search-icon" title="Search" data-toggle="tooltip" data-placement="bottom">
    <i class="fas fa-search"></i>
</button>


<div class="search-overlay" x-bind:class="isOpen ? 'search-overlay--visible' : ''">
    <div class="search-overlay-top shadow-sm">
        <div class="container container--narrow mx-auto" style="max-width: 500px;">
            <label for="live-search-field" class="search-overlay-icon"><i class="fas fa-search"></i></label>
            <input x-on:keydown="document.querySelector('.circle-loader').classList.add('circle-loader--visible'); if (document.querySelector('#no-results')) {document.querySelector('#no-results').style.display = 'none'}"
                   wire:model.live.debounce.750ms="searchTerm" autocomplete="off" type="text" id="live-search-field" class="live-search-field" placeholder="What are you interested in?">
            <span wire:click="$set('searchTerm', '')" x-on:click="isOpen = false" class="close-live-search" style="margin-left: 10px;"><i class="fas fa-times-circle"></i></span>


        </div>
    </div>
    <div class="search-overlay-bottom">
        <div class="container container--narrow py-3 mx-auto" style="max-width: 800px;">
            <div class="circle-loader"></div>
            <div class="live-search-results live-search-results--visible text-center">


                <?php if(count($results) > 0): ?>
                    <table class="table table-striped table-bordered" style="width: 100%; border-collapse: collapse; background-color: #f9f9f9; border: 1px solid #ddd;">
                        <thead style="background-color: #f0f0f0;">
                        <tr>
                            <th style="padding: 10px; border: 1px solid #ddd;">ID</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Name</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Short Name</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Path</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Created At</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Updated At</th>
                            <th style="padding: 10px; border: 1px solid #ddd;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td style="padding: 10px; border: 1px solid #ddd;"><?php echo e($doc->id); ?></td>
                                <td style="padding: 10px; border: 1px solid #ddd;"><?php echo e($doc->name); ?></td>
                                <td style="padding: 10px; border: 1px solid #ddd;"><?php echo e($doc->shortname); ?></td>
                                <td style="padding: 10px; border: 1px solid #ddd;"><?php echo e($doc->path); ?></td>
                                <td style="padding: 10px; border: 1px solid #ddd;"><?php echo e($doc->created_at); ?></td>
                                <td style="padding: 10px; border: 1px solid #ddd;"><?php echo e($doc->updated_at); ?></td>
                                <td style="padding: 10px; border: 1px solid #ddd;">
                                    <button wire:click="editDocument(<?php echo e($doc->id); ?>)" style="background-color: #007bff; color: #fff; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Edit</button>
                                    &nbsp;
                                    <button wire:click="deleteDocument(<?php echo e($doc->id); ?>)" style="background-color: #dc3545; color: #fff; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">Delete</button>
                                </td>

                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                <?php endif; ?>




            </div>
        </div>
    </div>
</div>


<div x-show="!isOpen" class="container container--narrow py-3 mx-auto" style="max-width: 800px;">
    <table class="table table-striped table-bordered shadow-sm mx-auto" style="width: 100%; border-collapse: collapse;">
        <!-- table content -->
    </table>
</div>
</div>





































































<?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\search-docs.blade.php ENDPATH**/ ?>