<?php
    $service_cats = App\Models\Service::all();
    $works = App\Models\Portfolio::Latest()->limit(4)->get();
?>
<section class="portfolio-section" id="works-section">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="section-header text-center">
                <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Recent Works</h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                   I have run hundreds of successful projects
                </p>
             </div>
          </div>
       </div>

       <div class="row">
          <div class="col-md-12">
             <div class="portfolio-filter text-center wow fadeInUp" data-wow-delay=".5s">
                <div class="button-group filter-button-group">
                   <button data-filter="*" class="active">All</button>
                   <?php $__currentLoopData = $service_cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <button data-filter=".<?php echo e(Str::replace(' ', '-', $cat->service_title)); ?>"><?php echo e($cat->service_title); ?></button>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                   <div class="active-bg"></div>
                </div>
             </div>

             <div class="portfolio-box wow fadeInUp" data-wow-delay=".6s">
                <div class="portfolio-sizer"></div>
                <div class="gutter-sizer"></div>
                <?php $__currentLoopData = $works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="portfolio-item <?php echo e(Str::replace(' ', '-', $work['service']['service_title'])); ?>">
                     <div class="image-box">
                        <img src="<?php echo e(asset($work->photo)); ?>" alt="" />
                     </div>
                     <a href="<?php echo e($work->url); ?>" target="_blank" style="color: #f3f3f3">
                        <div class="content-box">
                           <h3 class="portfolio-title"> <?php echo e($work->title); ?> </h3>
                           <p><?php echo e($work->sub_title); ?></p>
                           <i class="flaticon-up-right-arrow"></i>
                           
                        </div>
                     </a>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

             </div>
          </div>
       </div>
    </div>
 </section>
<?php /**PATH C:\xampp\htdocs\pmway\resources\views/frontend/partials/portfolio.blade.php ENDPATH**/ ?>