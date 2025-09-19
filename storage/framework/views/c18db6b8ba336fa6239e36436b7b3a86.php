<section class="resume-section" id="resume-section">
    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <div class="section-header wow fadeInUp" data-wow-delay=".3s">
                <h2 class="section-title"><i class="flaticon-recommendation"></i> My Experience</h2>
             </div>

             <?php
                 $experiences = App\Models\Resume::where('resume_cat', 'experience')->get();
                 $eductions = App\Models\Resume::where('resume_cat', 'education')->get();
             ?>

             <div class="resume-widget">
               <?php if (! (count($experiences) < 1)): ?>
                   <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $experience): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="resume-item wow fadeInLeft" data-wow-delay=".4s">
                        <div class="time"><?php echo e($experience->from_year); ?> - <?php echo e($experience->to_year); ?></div>
                        <h3 class="resume-title"><?php echo e($experience->resume_title); ?></h3>
                        <div class="institute"><?php echo e($experience->institution); ?></div>
                     </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php else: ?> 
                  <p>No experience found!! 😌😌</p>
               <?php endif; ?>
              
             </div>
          </div>

          <div class="col-md-6">
             <div class="section-header wow fadeInUp" data-wow-delay=".4s">
                <h2 class="section-title"><i class="flaticon-graduation-cap"></i> My Education</h2>
             </div>

             <div class="resume-widget">

               <?php if (! (count($eductions) < 1)): ?>
                   <?php $__currentLoopData = $eductions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eduction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="resume-item wow fadeInLeft" data-wow-delay=".4s">
                        <div class="time"><?php echo e($eduction->from_year); ?> - <?php echo e($eduction->to_year); ?></div>
                        <h3 class="resume-title"><?php echo e($eduction->resume_title); ?></h3>
                        <div class="institute"><?php echo e($eduction->institution); ?></div>
                     </div>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php else: ?> 
                  <p>No experience found!! 😌😌</p>
               <?php endif; ?>
               
             </div>
          </div>
       </div>
    </div>
 </section><?php /**PATH C:\xampp\htdocs\pmway\resources\views/frontend/partials/resume.blade.php ENDPATH**/ ?>