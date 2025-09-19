<section class="services-section" id="services-section">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="section-header text-center">
                <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Quality Services</h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                   I have a range of services that I offer
                </p>
             </div>
          </div>
       </div>

       <?php
           $services = App\Models\Service::latest()->limit(4)->get();
       ?>

       <div class="row">
          <div class="col-md-12">
             <div class="services-widget position-relative">

               <?php if (! (count($services) == 0)): ?>
                  <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="service-item current d-flex flex-wrap align-items-center wow fadeInUp"
                     data-wow-delay=".5s">
                        <div class="left-box d-flex flex-wrap align-items-center">
                           <span class="number">0<?php echo e($key+1); ?></span>
                           <h3 class="service-title"><?php echo e($service->service_title); ?></h3>
                        </div>
                        <div class="right-box">
                           <p>
                              <?php echo e($service->service_description); ?>

                           </p>
                        </div>
                        <i class="flaticon-up-right-arrow"></i>
                        <button data-mfp-src="#service-wrapper" class="service-link modal-popup"></button>
                     </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php else: ?>
                     <p>No Service found! 😌😌</p>
               <?php endif; ?>


                <div class="active-bg wow fadeInUp" data-wow-delay=".5s"></div>
             </div>
          </div>
       </div>
    </div>
 </section>
<?php /**PATH C:\xampp\htdocs\pmway\resources\views/frontend/partials/services.blade.php ENDPATH**/ ?>