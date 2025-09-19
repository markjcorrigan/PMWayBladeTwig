<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo e(asset('fontawesome6\css\all.min.css')); ?>">

    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

</head>
<body>
<header>
    <nav>
        <title><?php echo $__env->yieldContent('title'); ?></title>

        <?php echo $__env->yieldContent('header'); ?>

    </nav>
</header>
<main>

    <?php echo $__env->yieldContent('maincontent'); ?>

</main>
</body>


<footer>
    <?php echo $__env->yieldContent('footer'); ?>
</footer>
</html>

<?php /**PATH C:\xampp\htdocs\pmway\resources\views\documents\documentlayout\default.blade.php ENDPATH**/ ?>