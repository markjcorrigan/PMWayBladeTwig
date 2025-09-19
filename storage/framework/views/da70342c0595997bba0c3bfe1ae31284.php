<form method="POST" action="<?php echo e(route('logout')); ?>">
    <?php echo csrf_field(); ?>
    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
        Logout
    </button>
</form>
<?php /**PATH C:\xampp\htdocs\pmway\resources\views\forcelogout.blade.php ENDPATH**/ ?>