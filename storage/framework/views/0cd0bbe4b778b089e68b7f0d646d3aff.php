<script src="https://cdn.tailwindcss.com"></script>
<title>Blog</title>
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
<section class="breadcrumb_area" data-bg-image="<?php echo e(asset('frontend/assets/img/breadcrumb/breadcrumb-bg.jpg')); ?>"
    data-bg-color="#140C1C">
    <div class="container">
        <?php
        $firstPost = App\Models\BlogPost::where('approved', 1)->oldest()->first();
        $firstPostId = $firstPost ? $firstPost->id : null;
        ?>

        <div class="row justify-content-end">
            <div class="col-auto">
                <div class="d-flex justify-content-end align-items-center">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog-section" id="blog-section">

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
    </style>

    <div class="container">
        <div class="row">
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
<?php $component->withAttributes(['class' => ''.e(Request::is('/') ? 'active' : '').'','href' => '/','separator' => 'slash']); ?>Home
                                         <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => ''.e(Request::is('blog') ? 'active' : '').'','href' => '/blog','separator' => 'slash']); ?>Blog
                                         <?php echo $__env->renderComponent(); ?>
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
<?php $component->withAttributes(['class' => ''.e(Request::is('post/details/*') ? 'active' : '').'','href' => ''.e(url('/post/details/' . $firstPostId)).'','separator' => 'slash']); ?>Posts
                                         <?php echo $__env->renderComponent(); ?>
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
            <div class="col-md-12">
                <div class="section-header text-center">
                    <br><br>

                    <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">6 latest posts</h2>
                    <br><br>
                    <span class="breadcrumb_navigation wow fadeInUp" data-wow-delay=".5s">
                    </span>
                    
                        
                        
                    
                    
                        
                        
                    <p class="wow fadeInUp" data-wow-delay=".4s">
                        <?php if(auth()->guard()->check()): ?>
                        <span class="header-button ms-3">
                            <a href="<?php echo e(route('user.add.post')); ?>" class="btn tj-btn-primary">Share Your Ideas</a>
                        </span>&nbsp;&nbsp;&nbsp;
                        
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            
            <?php
            $posts = App\Models\BlogPost::where('approved', 1)->latest()->limit(6)->get();
            ?>

            <?php if (! (count($posts) == 0)): ?>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $comments = App\Models\Comment::where('post_id', $post->id)->where('status', 1)->get();
            ?>
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
                                <li>
                                    <i class="fa-light fa-calendar-days"></i> <?php echo e($post->created_at->format('D M, Y')); ?>

                                </li>
                                <li><i class="fa-light fa-comments"></i> <a href="#">Comment
                                        (<?php echo e(count($comments)); ?>)</a></li>
                            </ul>
                        </div>
                        <h3 class="blog-title"><a href="/post/details/<?php echo e($post->id); ?>"><?php echo e(Str::limit($post->post_title,
                                40)); ?></a>
                        </h3>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
            <p>No Post found!! 😌😌</p>
            <?php endif; ?>
        </div>
    </div>
</section><?php /**PATH C:\xampp\htdocs\pmway\resources\views\frontend\partials\blog.blade.php ENDPATH**/ ?>