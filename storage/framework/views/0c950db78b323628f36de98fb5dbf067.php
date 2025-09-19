<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        <?php if(isset($doctitle)): ?>
        <?php echo e($doctitle); ?> | PMWay Blog
        <?php else: ?>
        PMWay Blog
        <?php endif; ?>
    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />



    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <!-- <link href="<?php echo e(asset('summernote/summernote-lite.min.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('summernote/summernote-lite.min.js')); ?>"></script> -->


    <link rel="stylesheet" href="<?php echo e(asset('fontawesome6/fontawesome6/pro/css/all.css')); ?>">



    <link rel="stylesheet" href="<?php echo e(asset('build/assets/app.css')); ?>">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>


</head>

<body>
    <header class="header-bar mb-3">
        <div class="container d-flex flex-row align-items-center p-3 justify-content-between">
            <h4 class="my-0 font-weight-normal"><a wire:navigate href="/" class="text-white">PMWay</a></h4>
            <?php if(auth()->guard()->check()): ?>
            <div class="d-flex flex-row align-items-center mr-2">
                <a wire:navigate class="btn btn-sm btn-success mr-2" a href="/writestuff"
                    class="btn btn-sm btn-secondary">Following</a>
            </div>

            <div class="d-flex align-items-center">
                <div class="d-flex flex-row align-items-center mr-2">
                    <!-- <form action="/logout" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-sm btn-secondary">Sign Out</button>
                    </form> -->
                </div>
                <?php app("livewire")->forceAssetInjection(); ?><div x-persist="<?php echo e('headerdynamic'); ?>">
                <div class="d-flex flex-row align-items-center mr-2">
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('search', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1533202026-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('chat', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-1533202026-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                </div>
                </div>
                <a wire:navigate href="/profile/<?php echo e(auth()->user()->name); ?>" class="mr-2"><img title="My Profile"
                        data-toggle="tooltip" data-placement="bottom"
                        style="width: 32px; height: 32px; border-radius: 16px" src="<?php echo e(auth()->user()->avatar); ?>" /></a>
                <a wire:navigate class="btn btn-sm btn-success mr-2" href="/create-post">Create Post</a>
                <!-- <form action="/logout" method="POST" class="d-inline">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-sm btn-secondary">Sign Out</button>
                </form> -->
            </div>
            <?php else: ?>
            <div class="d-flex flex-row align-items-center mr-2">
                <a wire:navigate class="btn btn-sm btn-success mr-2" a href="/writestuff"
                    class="btn btn-sm btn-secondary">Following</a>
            </div>
            <!-- <form action="/login" method="POST" class="mb-0 pt-2 pt-md-0 d-flex align-items-center">
                <?php echo csrf_field(); ?>

                <div class="mr-2">
                    <input name="loginpassword" class="form-control form-control-sm input-dark" type="password"
                        placeholder="Password" />
                </div>
                <div>
                    <button class="btn btn-primary btn-sm">Sign In</button>
                </div>
            </form> -->
            <?php endif; ?>
        </div>
    </header>


    <?php if(session()->has('success')): ?>
    <div class="container container--narrow">
        <div class="alert alert-success text-center">
            <?php echo e(session('success')); ?>

        </div>
    </div>
    <?php endif; ?>

    <?php if(session()->has('failure')): ?>
    <div class="container container--narrow">
        <div class="alert alert-danger text-center">
            <?php echo e(session('failure')); ?>

        </div>
    </div>
    <?php endif; ?>

    <?php echo e($slot); ?>


    <!-- footer begins -->

    <?php if (isset($component)) { $__componentOriginal834cc3d8b1c90fbc92ceba556663cbae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal834cc3d8b1c90fbc92ceba556663cbae = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footerbs','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footerbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal834cc3d8b1c90fbc92ceba556663cbae)): ?>
<?php $attributes = $__attributesOriginal834cc3d8b1c90fbc92ceba556663cbae; ?>
<?php unset($__attributesOriginal834cc3d8b1c90fbc92ceba556663cbae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal834cc3d8b1c90fbc92ceba556663cbae)): ?>
<?php $component = $__componentOriginal834cc3d8b1c90fbc92ceba556663cbae; ?>
<?php unset($__componentOriginal834cc3d8b1c90fbc92ceba556663cbae); ?>
<?php endif; ?>

    <!-- footer ends -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>


    <script>
        $('[data-toggle="tooltip"]').tooltip()
    </script>



</body>

</html>
<?php /**PATH C:\xampp\htdocs\pmway\resources\views\components\layout.blade.php ENDPATH**/ ?>