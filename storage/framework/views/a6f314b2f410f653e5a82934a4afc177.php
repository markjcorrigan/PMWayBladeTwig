<?php
   $siteSettings = App\Models\SiteSettings::findOrFail(1);
?>
<header class="tj-header-area header-absolute">
    <div class="container">
       <div class="row">
          <div class="col-12 d-flex flex-wrap align-items-center">
             <div class="logo-box">
                <a href="/">
                   <img src="<?php echo e(asset($siteSettings->logo)); ?>" alt="" />

                </a>
             </div>

             <div class="header-info-list d-none d-md-inline-block">
                 <ul class="ul-reset" style="list-style: none; padding: 0; margin: 0;">
                     <li style="display: inline-block; margin-right: 20px;"><a href="/">Landing Page</a></li>
                     <li style="display: inline-block;"><a href="/home">Home</a></li>
                 </ul>


             </div>
             <div class="header-menu">
                <nav>
                   <ul>

                      <li><a href="#services-section">Services</a></li>
                      <li><a href="#works-section">Works</a></li>
                      <li><a href="#resume-section">Resume</a></li>
                      <li><a href="#skills-section">Skills</a></li>
                       <?php if(auth()->guard()->check()): ?>
                       <li><a href="cv/index.php" class="navbar-link pointer-enter" title="My CV and Credentials Page">CV/Creds</a></li>
                       <li><a href="jobs/aci.php" target="_blank"  class="navbar-link pointer-enter" title="My Jobs Listing">Work</a></li>
                       <?php endif; ?>


                   </ul>
                </nav>
             </div>



















 </header>


















































<?php /**PATH C:\xampp\htdocs\pmway\resources\views/frontend/partials/header.blade.php ENDPATH**/ ?>