<!DOCTYPE html>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Site Title -->
    <title>Blog</title>

    <!-- Place favicon.ico in the root directory -->
    
    

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/animate.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/font-awesome-pro.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/flaticon_gerold.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/nice-select.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/backToTop.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/owl.carousel.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/swiper.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/odometer-theme-default.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/magnific-popup.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/main.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/light-mode.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('frontend/assets/css/responsive.css')); ?>" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    
    

        
        <script src="<?php echo e(asset('js/tinymce/js/tinymce/tinymce.min.js')); ?>"></script>


</head>
<?php if (isset($component)) { $__componentOriginal738d69465e46014f08a8bd2884fe444a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal738d69465e46014f08a8bd2884fe444a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blog-loading-preloader','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blog-loading-preloader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal738d69465e46014f08a8bd2884fe444a)): ?>
<?php $attributes = $__attributesOriginal738d69465e46014f08a8bd2884fe444a; ?>
<?php unset($__attributesOriginal738d69465e46014f08a8bd2884fe444a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal738d69465e46014f08a8bd2884fe444a)): ?>
<?php $component = $__componentOriginal738d69465e46014f08a8bd2884fe444a; ?>
<?php unset($__componentOriginal738d69465e46014f08a8bd2884fe444a); ?>
<?php endif; ?>

<body>
    <style>
        .btn.tj-btn-primary {
            position: relative;
        }

        .btn.tj-btn-primary::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            /* Changed from 2px to 1px */
            bottom: 0;
            left: 50%;
            background-color: #fff;
            transition: all 0.3s ease-in-out;
        }

        .btn.tj-btn-primary:hover::after {
            width: 100%;
            left: 0;
        }

        .custom-breadcrumbs a {
            color: white !important;
        }

        .custom-breadcrumbs a:hover {
            color: #ccc !important;
            /* Change to your desired hover color */
        }


        .custom-breadcrumbs a[href*="<?php echo e(Request::url()); ?>"] {
            text-decoration: underline;
        }

        .custom-breadcrumbs .active {
            text-decoration: underline;
            text-decoration-color: white;
            text-underline-offset: 4px;
            text-decoration-thickness: 2px;
        }

        .custom-breadcrumbs {
            white-space: nowrap;
        }
    </style>
    <!-- Preloader Area Start -->
    <div class="preloader">
        <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
            <path id="preloaderSvg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
        </svg>

        <div class="preloader-heading">
            <div class="load-text">
                <span>L</span>
                <span>o</span>
                <span>a</span>
                <span>d</span>
                <span>i</span>
                <span>n</span>
                <span>g</span>
            </div>
        </div>
    </div>
    <!-- Preloader Area End -->

    <!-- start: Back To Top -->
    <div class="progress-wrap" id="scrollUp">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- end: Back To Top -->
    <main class="site-content" id="content">
        <?php
        $firstPost = App\Models\BlogPost::where('approved', 1)->oldest()->first();
        $firstPostId = $firstPost->id;
        ?>
        <!-- START: Breadcrumb Area -->

        <section class="breadcrumb_area" data-bg-image="<?php echo e(asset('frontend/assets/img/breadcrumb/breadcrumb-bg.jpg')); ?>"
            data-bg-color="#140C1C">
            <div class="container">
                <div class="row">

                    <div class="col">
                        <div class="breadcrumb_content d-flex flex-column align-items-end">
                            <div class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                                
                                    
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- END: Breadcrumb Area -->

        <!-- START: Blog Section -->
        <section class="full-width tj-post-details__area">
            <div class="container">
                <div class="grid grid-cols-12">
                    <div class="col-start-1 col-span-1 ">
                        <?php if (isset($component)) { $__componentOriginalbbbea167ab072e3e3621cf7b736152aa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbbbea167ab072e3e3621cf7b736152aa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::breadcrumbs.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="custom-breadcrumbs">
                                <?php if (isset($component)) { $__componentOriginalbbbea167ab072e3e3621cf7b736152aa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbbbea167ab072e3e3621cf7b736152aa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::breadcrumbs.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <div class="custom-breadcrumbs">
                                        <?php if (isset($component)) { $__componentOriginalbbbea167ab072e3e3621cf7b736152aa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbbbea167ab072e3e3621cf7b736152aa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::breadcrumbs.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::breadcrumbs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                            <?php if (isset($component)) { $__componentOriginalced986e8ff6641d3797206c3198c2b83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalced986e8ff6641d3797206c3198c2b83 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::breadcrumbs.item','data' => ['class' => ''.e(Request::is('/') ? 'active' : '').'','href' => '/','separator' => 'slash']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::breadcrumbs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => ''.e(Request::is('/') ? 'active' : '').'','href' => '/','separator' => 'slash']); ?>Home <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalced986e8ff6641d3797206c3198c2b83)): ?>
<?php $attributes = $__attributesOriginalced986e8ff6641d3797206c3198c2b83; ?>
<?php unset($__attributesOriginalced986e8ff6641d3797206c3198c2b83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalced986e8ff6641d3797206c3198c2b83)): ?>
<?php $component = $__componentOriginalced986e8ff6641d3797206c3198c2b83; ?>
<?php unset($__componentOriginalced986e8ff6641d3797206c3198c2b83); ?>
<?php endif; ?>
                                            <?php if (isset($component)) { $__componentOriginalced986e8ff6641d3797206c3198c2b83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalced986e8ff6641d3797206c3198c2b83 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::breadcrumbs.item','data' => ['class' => ''.e(Request::is('blog') ? 'active' : '').'','href' => '/blog','separator' => 'slash']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::breadcrumbs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => ''.e(Request::is('blog') ? 'active' : '').'','href' => '/blog','separator' => 'slash']); ?>Blog <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalced986e8ff6641d3797206c3198c2b83)): ?>
<?php $attributes = $__attributesOriginalced986e8ff6641d3797206c3198c2b83; ?>
<?php unset($__attributesOriginalced986e8ff6641d3797206c3198c2b83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalced986e8ff6641d3797206c3198c2b83)): ?>
<?php $component = $__componentOriginalced986e8ff6641d3797206c3198c2b83; ?>
<?php unset($__componentOriginalced986e8ff6641d3797206c3198c2b83); ?>
<?php endif; ?>
                                            <?php if (isset($component)) { $__componentOriginalced986e8ff6641d3797206c3198c2b83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalced986e8ff6641d3797206c3198c2b83 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::breadcrumbs.item','data' => ['class' => ''.e(Request::is('post/details/*') ? 'active' : '').'','href' => ''.e(url('/post/details/' . $firstPostId)).'','separator' => 'slash']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::breadcrumbs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => ''.e(Request::is('post/details/*') ? 'active' : '').'','href' => ''.e(url('/post/details/' . $firstPostId)).'','separator' => 'slash']); ?>
                                                Posts <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalced986e8ff6641d3797206c3198c2b83)): ?>
<?php $attributes = $__attributesOriginalced986e8ff6641d3797206c3198c2b83; ?>
<?php unset($__attributesOriginalced986e8ff6641d3797206c3198c2b83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalced986e8ff6641d3797206c3198c2b83)): ?>
<?php $component = $__componentOriginalced986e8ff6641d3797206c3198c2b83; ?>
<?php unset($__componentOriginalced986e8ff6641d3797206c3198c2b83); ?>
<?php endif; ?>
                                            <?php if (isset($component)) { $__componentOriginalced986e8ff6641d3797206c3198c2b83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalced986e8ff6641d3797206c3198c2b83 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::breadcrumbs.item','data' => ['class' => ''.e(Request::is('useraddpost/') ? 'active' : '').'','href' => ''.e(url('/useraddpost/')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::breadcrumbs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => ''.e(Request::is('useraddpost/') ? 'active' : '').'','href' => ''.e(url('/useraddpost/')).'']); ?>Add Post <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalced986e8ff6641d3797206c3198c2b83)): ?>
<?php $attributes = $__attributesOriginalced986e8ff6641d3797206c3198c2b83; ?>
<?php unset($__attributesOriginalced986e8ff6641d3797206c3198c2b83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalced986e8ff6641d3797206c3198c2b83)): ?>
<?php $component = $__componentOriginalced986e8ff6641d3797206c3198c2b83; ?>
<?php unset($__componentOriginalced986e8ff6641d3797206c3198c2b83); ?>
<?php endif; ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbbbea167ab072e3e3621cf7b736152aa)): ?>
<?php $attributes = $__attributesOriginalbbbea167ab072e3e3621cf7b736152aa; ?>
<?php unset($__attributesOriginalbbbea167ab072e3e3621cf7b736152aa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbbbea167ab072e3e3621cf7b736152aa)): ?>
<?php $component = $__componentOriginalbbbea167ab072e3e3621cf7b736152aa; ?>
<?php unset($__componentOriginalbbbea167ab072e3e3621cf7b736152aa); ?>
<?php endif; ?>
                                    </div>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbbbea167ab072e3e3621cf7b736152aa)): ?>
<?php $attributes = $__attributesOriginalbbbea167ab072e3e3621cf7b736152aa; ?>
<?php unset($__attributesOriginalbbbea167ab072e3e3621cf7b736152aa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbbbea167ab072e3e3621cf7b736152aa)): ?>
<?php $component = $__componentOriginalbbbea167ab072e3e3621cf7b736152aa; ?>
<?php unset($__componentOriginalbbbea167ab072e3e3621cf7b736152aa); ?>
<?php endif; ?>
                            </div>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbbbea167ab072e3e3621cf7b736152aa)): ?>
<?php $attributes = $__attributesOriginalbbbea167ab072e3e3621cf7b736152aa; ?>
<?php unset($__attributesOriginalbbbea167ab072e3e3621cf7b736152aa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbbbea167ab072e3e3621cf7b736152aa)): ?>
<?php $component = $__componentOriginalbbbea167ab072e3e3621cf7b736152aa; ?>
<?php unset($__componentOriginalbbbea167ab072e3e3621cf7b736152aa); ?>
<?php endif; ?>
                    </div>
                </div>
                
                    

                    
                <br><br>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="tj-post-details__container">
                            <form class="forms-sample" method="POST" action="<?php echo e(route('user.store.post')); ?>"
                                enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row mb-3">
                                    <label for="post_title" class="col-sm-3 col-form-label">Post Title</label>
                                    <div class="col-sm-9">
                                        <input type="text"
                                            class="form-control <?php $__errorArgs = ['post_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="post_title" placeholder="Post Title" value="<?php echo e(old('post_title')); ?>"
                                            required>
                                        <?php $__errorArgs = ['post_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="post_tags" class="col-sm-3 col-form-label">Post Tags <br>(CSV: Comma
                                        Separated Values)</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?php $__errorArgs = ['post_tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="post_tags" placeholder="Tag1, Tag2 etc."
                                            value="<?php echo e(old('post_tags')); ?>" required>
                                        <?php $__errorArgs = ['post_tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="post_description" class="col-sm-3 col-form-label">Post Content</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control <?php $__errorArgs = ['post_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            id="tinymceExample" name="post_description"
                                            rows="10"><?php echo e(old('post_description')); ?></textarea>
                                        <?php $__errorArgs = ['post_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="post_photo" class="col-sm-3 col-form-label">Post Photo</label>
                                    <div class="col-sm-9">
                                        <input class="form-control <?php $__errorArgs = ['post_photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                            name="post_photo" type="file" id="Image" required>
                                        <?php $__errorArgs = ['post_photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <img id="ShowImage" src="<?php echo e(asset('uploads/no_image.jpg')); ?>" alt=""
                                            style="width: 90px; height: 90px">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-secondary">Add Post</button>
                            </form>
                        </div>
                        <br>
                        <p>Note: An email will be sent to the Webmaster when you add this post so it can be approved.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center">
                <br><br>
                <h2 class="bold text-[#fcf0da] text-4xl">Remember: Keep it Sweet and Simple</h2>
                <p>We are looking for ideas. If needed, as I have access to html etc., I will format the post.</p>
                <img src="<?php echo e(asset('images/kissimage.jpg')); ?>" alt="Keep it Sweet and Simple" class="mb-4 mt-4">
                <!-- <img src="<?php echo e(asset('images/kissimage2.jpg')); ?>" alt="Keep it Sweet and Simple" class="mb-4"> -->

            </div>


    </main>

    <!-- FOOTER AREA START -->
    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
    <!-- FOOTER AREA END -->

    <!-- CSS here -->
    <script src="<?php echo e(asset('frontend/assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/backToTop.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/smooth-scroll.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/appear.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/gsap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/one-page-nav.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/lightcase.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/swiper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/imagesloaded-pkgd.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/isotope.pkgd.min.j')); ?>s"></script>
    <script src="<?php echo e(asset('frontend/assets/js/odometer.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/magnific-popup.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/validate.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/assets/js/main.js')); ?>"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        tinymce.init({
            selector: '#tinymceExample',
            height: 300,
            plugins: 'advlist autolink lists link image charmap print preview anchor',
            toolbar: 'undo redo | blocks | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'
        });
    </script>


    <script>
        <?php if(Session:: has('message')): ?>
        var type = "<?php echo e(Session::get('alert-type','info')); ?>"
        switch (type) {
            case 'info':
                toastr.info(" <?php echo e(Session::get('message')); ?> ");
                break;

            case 'success':
                toastr.success(" <?php echo e(Session::get('message')); ?> ");
                break;

            case 'warning':
                toastr.warning(" <?php echo e(Session::get('message')); ?> ");
                break;

            case 'error':
                toastr.error(" <?php echo e(Session::get('message')); ?> ");
                break;
        }
        <?php endif; ?>
    </script>
    <script>
        $(document).ready(function () {
            $('#Image').on('change', function (e) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#ShowImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        })
    </script>


</body>

</html>
<?php /**PATH C:\xampp\htdocs\pmway\resources\views\frontend\blog\add_post.blade.php ENDPATH**/ ?>