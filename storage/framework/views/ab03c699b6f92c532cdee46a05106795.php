<form wire:submit="save" class="ml-2 d-inline" action="/remove-follow/<?php echo e($sharedData['name']); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <button class="btn btn-danger btn-sm">Stop Following <i class="fas fa-user-times"></i></button>
</form><?php /**PATH C:\xampp\htdocs\pmway\resources\views\livewire\removefollow.blade.php ENDPATH**/ ?>