<?php
    $hero = App\Models\Hero::findOrNew(1);

?>

<section class="hero-section d-flex align-items-center" id="intro">
    
    <div class="intro_text">
       <svg viewBox="0 0 1320 300">
          <text x="80%" Y="10%" text-anchor="middle">Hi</text>
       </svg>
    </div>
    <div class="container">
       <div class="row align-items-center">
          <div class="col-md-6">
             <div class="hero-content-box">
                <span class="hero-sub-title"><?php echo e($hero->name); ?></span>
                <h1 class="hero-title"><?php echo e($hero->profession); ?></h1>

                 <div class="hero-image-box d-md-none text-center">
                     <img src="<?php echo e($hero->photo ? asset($hero->photo) : asset('uploads/no-img-avatar.png')); ?>"
                          class="hero-image"
                          alt="" />
                 </div>





                 <p class="lead">
                  <?php echo e($hero->short_description); ?>

                </p>
                <div class="button-box d-flex flex-wrap align-items-center">
                   <a href="<?php echo e($hero->resume); ?>" class="btn tj-btn-secondary">Download CV <i class="flaticon-download"></i></a>
                   <ul class="ul-reset social-icons">






                      <li>
                         <a href="<?php echo e($hero->linkin_url); ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                      </li>
                      <li>
                         <a href="<?php echo e($hero->github_url); ?>"><i class="fa-brands fa-github"></i></a>
                      </li>
                   </ul>
                </div>
             </div>
          </div>





           <div class="col-md-6 d-none d-md-block">
               <div class="hero-image-box text-center">
                   <img src="<?php echo e($hero->photo ? asset($hero->photo) : asset('uploads/no-img-avatar.png')); ?>" alt="" />
               </div>
           </div>
       </div>
       <div class="funfact-area">
          <div class="row">
             <div class="col-6 col-lg-3">
                <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                   <div class="number"><span class="odometer" data-count="<?php echo e($hero->YOE); ?>">0</span></div>
                   <div class="text">of Years of <br />Experience</div>
                </div>
             </div>
             <div class="col-6 col-lg-3">
                <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                   <div class="number"><span class="odometer" data-count="<?php echo e($hero->PC); ?>">0</span>+</div>
                   <div class="text"> Projects <br />Completed</div>
                </div>
             </div>
             <div class="col-6 col-lg-3">
                <div class="funfact-item d-flex flex-column flex-sm-row flex-wrap align-items-center">
                   <div class="number"><span class="odometer" data-count="<?php echo e($hero->HC); ?>">0</span>+</div>
                   <div class="text">Happy <br />Clients</div>
                </div>
             </div>

          </div>
       </div>
    </div>
 </section>
<?php /**PATH C:\xampp\htdocs\pmway\resources\views\frontend\partials\hero.blade.php ENDPATH**/ ?>