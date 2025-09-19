<?php $__env->startComponent('mail::message'); ?>
# Contact Form Submission

From: <?php echo e($contact['name']); ?>


Email: <?php echo e($contact['email']); ?>




Message: <?php echo e($contact['message']); ?>






Thanks<br>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\pmway\resources\views\emails\contact-form-email.blade.php ENDPATH**/ ?>