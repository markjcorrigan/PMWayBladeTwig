<section class="skills-section" id="skills-section">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="section-header text-center">
                <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">My Skills</h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                   I have many skills to bring to your party
                </p>
             </div>
          </div>
       </div>

       <?php
           $skills = App\Models\Skill::all();
       ?>

       <div class="row">
          <div class="col-md-12">
             <div class="skills-widget d-flex flex-wrap justify-content-center align-items-center">

               <?php if (! (count($skills) == 0)): ?>
                  <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="skill-item wow fadeInUp" data-wow-delay=".3s">
                        <div class="skill-inner">
                           <div class="icon-box">
                              <img src="<?php echo e(asset($skill->icon)); ?>" alt="" />
                           </div>
                           <div class="number"> <?php echo e($skill->exp_level); ?> </div>
                        </div>
                        <p><?php echo e($skill->technology_name); ?></p>
                     </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php else: ?>
                  <p>No Skill found!! 😌😌</p>
               <?php endif; ?>

             </div>
          </div>
       </div>
    </div>
 </section>
<?php /**PATH C:\xampp\htdocs\pmway\resources\views\frontend\partials\skills.blade.php ENDPATH**/ ?>