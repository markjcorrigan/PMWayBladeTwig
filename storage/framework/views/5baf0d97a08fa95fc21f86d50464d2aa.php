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

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    <style>
        .btn.tj-btn-primary {
            position: relative;
        }

        .btn.tj-btn-primary::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px; /* Changed from 2px to 1px */
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
            color: #ccc !important; /* Change to your desired hover color */
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
    </style>

</head>

<body>
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

<?php
    $firstPost = App\Models\BlogPost::where('approved', 1)->oldest()->first();
    $firstPostId = $firstPost->id;
?>

<main class="site-content" id="content">
<section class="breadcrumb_area" data-bg-image="<?php echo e(asset('frontend/assets/img/breadcrumb/breadcrumb-bg.jpg')); ?>" data-bg-color="#140C1C">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col text-center">
                <div class="breadcrumb_content d-inline-flex flex-column align-items-center">
                    <h2 class="title wow fadeInUp" data-wow-delay=".3s">Search Results for "<?php echo e($query); ?>"</h2>
                    <span class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                             </span>
                </div>
            </div>
        </div>
    </div>

</section>
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
<?php $component->withAttributes(['class' => ''.e(Request::is('post/details/*') ? 'active' : '').'','href' => ''.e(url('/post/details/' . $firstPostId)).'','separator' => 'slash']); ?>Posts <?php echo $__env->renderComponent(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'e60dd9d2c3a62d619c9acb38f20d5aa5::breadcrumbs.item','data' => ['class' => ''.e(Request::is('search/*') ? 'active' : '').'','href' => ''.e(url('/search/*')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('flux::breadcrumbs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => ''.e(Request::is('search/*') ? 'active' : '').'','href' => ''.e(url('/search/*')).'']); ?>Search <?php echo $__env->renderComponent(); ?>
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
        </div>
            <h2></h2>
            <br><br>

        <div class="container">

            <div class="row">
                <?php if($posts->isNotEmpty()): ?>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $comments = App\Models\Comment::where('post_id', $post->id)->where('status', 1)->get(); ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item wow fadeInUp" data-wow-delay=".5s">
                                <div class="blog-thumb">
                                    <a href="/post/details/<?php echo e($post->id); ?>">
                                        <img src="<?php echo e(asset($post->photo)); ?>" alt="" />
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <ul class="ul-reset">
                                            <li><i class="fa-light fa-calendar-days"></i> <?php echo e($post->created_at->format('D M, Y')); ?> </li>
                                            <li><i class="fa-light fa-comments"></i> <a href="#">Comment (<?php echo e(count($comments)); ?>)</a></li>
                                        </ul>
                                    </div>
                                    <h3 class="blog-title"><a href="/post/details/<?php echo e($post->id); ?>"><?php echo e(Str::limit($post->post_title, 40)); ?></a></h3>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($posts->links()); ?>

                <?php else: ?>
                    <p>No Post found!! </p>
                <?php endif; ?>
            </div>

    </section>


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
</main>

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
    <?php if(Session::has('message')): ?>
    var type = "<?php echo e(Session::get('alert-type','info')); ?>"
    switch(type){
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
</body>
</html>

<?php /**PATH C:\xampp\htdocs\pmway\resources\views\frontend\blog\searchresults.blade.php ENDPATH**/ ?>