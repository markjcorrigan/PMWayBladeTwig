<form wire:submit="save" class="ml-2 d-inline" action="/create-follow/<?php echo e($sharedData['name']); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <button class="btn btn-primary btn-sm">Follow <i class="fas fa-user-plus"></i></button>
        </form><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\addfollow.blade.php ENDPATH**/ ?>