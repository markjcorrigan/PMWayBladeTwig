<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
   <meta charset="utf-8" />
   <meta http-equiv="x-ua-compatible" content="ie=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <meta name="description" content="" />

   <!-- Site Title -->
   <title><?php echo e(config('app.name')); ?> </title>

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
</head>

<body>
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

   <!-- HEADER START -->
        <?php echo $__env->make('frontend.partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
   <!-- HEADER END -->

   <main class="site-content" id="content">
      <!-- HERO SECTION START -->
        <?php echo $__env->make('frontend.partials.hero', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
      <!-- HERO SECTION END -->

      <!-- SERVICES SECTION START -->
        <?php echo $__env->make('frontend.partials.services', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
      <!-- SERVICES SECTION END -->

      <!-- PORTFOLIO SECTION START -->
        <?php echo $__env->make('frontend.partials.portfolio', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
      <!-- PORTFOLIO SECTION END -->

      <!-- RESUME SECTION START -->
        <?php echo $__env->make('frontend.partials.resume', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
      <!-- RESUME SECTION END -->

      <!-- SKILLS SECTION START -->
        <?php echo $__env->make('frontend.partials.skills', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
      <!-- SKILLS SECTION END -->









      <!-- CONTACT SECTION START -->
        <?php echo $__env->make('frontend.partials.contact', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
      <!-- CONTACT SECTION END -->

   </main>

   <!-- FOOTER AREA START -->
    <?php echo $__env->make('frontend.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
<?php /**PATH C:\xampp\htdocs\pmway\resources\views\frontend\portfoliopage.blade.php ENDPATH**/ ?>