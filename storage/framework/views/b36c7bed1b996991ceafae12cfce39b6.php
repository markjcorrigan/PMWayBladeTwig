<head>
        <title>PMWay - <?php echo $__env->yieldContent('title'); ?></title>
</head>



<!-- ============================================== HEADER ============================================== -->
<?php echo $__env->make('frontend.legacy_header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- ============================================== HEADER : END ============================================== -->


<!-- ============================================== NAV ============================================== -->
<?php echo $__env->make('frontend.legacy_nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- ============================================== NAV : END ============================================== -->





<?php echo $__env->yieldContent('content'); ?>
<!-- /#top-banner-and-menu --> 

<!-- ============================================================= FOOTER ============================================================= -->
<?php echo $__env->make('frontend.legacy_footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<!-- ============================================================= FOOTER : END============================================================= --> 
<?php /**PATH C:\xampp\htdocs\pmway\resources\views\legacy_master.blade.php ENDPATH**/ ?>