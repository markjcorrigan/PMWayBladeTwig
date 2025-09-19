<nav class="sidebar">
  <div class="sidebar-header">

    

      
      
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item">
        
          <a href="<?php echo e(url('admin')); ?>" class="nav-link">
            <i class="link-icon" data-feather="box"></i>
            <span class="link-title">Dashboard</span>
          </a>
      </li>

      <li class="nav-item nav-category">Components</li>

      <li class="nav-item">
        <a href="<?php echo e(route('hero.section')); ?>" class="nav-link">


          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Hero Section</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#service" role="button" aria-expanded="false"
          aria-controls="uiComponents">
          <i class="link-icon" data-feather="feather"></i>
          <span class="link-title">My Quality Services</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="service">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="<?php echo e(route('add.service')); ?>" class="nav-link">Add Service</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('all.services')); ?>" class="nav-link">All Services</a>
            </li>

          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#portfolio" role="button" aria-expanded="false"
          aria-controls="uiComponents">
          <i class="link-icon" data-feather="feather"></i>
          <span class="link-title">My Recent Works</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="portfolio">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="<?php echo e(route('add.work')); ?>" class="nav-link">Add Work</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('all.recent.works')); ?>" class="nav-link">Portfolio</a>
            </li>

          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('my.experience')); ?>" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">My Experience</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('my.education')); ?>" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">My Education</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#myskill" role="button" aria-expanded="false"
          aria-controls="uiComponents">
          <i class="link-icon" data-feather="feather"></i>
          <span class="link-title">My Skills</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="myskill">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="<?php echo e(route('add.skill')); ?>" class="nav-link">Add Skill</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('all.skills')); ?>" class="nav-link">All Skills</a>
            </li>

          </ul>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#testimonial" role="button" aria-expanded="false"
          aria-controls="uiComponents">
          <i class="link-icon" data-feather="feather"></i>
          <span class="link-title">Testimonials</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="testimonial">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="<?php echo e(route('add.testimony')); ?>" class="nav-link">Add Testimony</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('all.testimoies')); ?>" class="nav-link">All Testimonies</a>
            </li>

          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#blog" role="button" aria-expanded="false"
          aria-controls="uiComponents">
          <i class="link-icon" data-feather="feather"></i>
          <span class="link-title">Blogs</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse" id="blog">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="<?php echo e(route('add.post')); ?>" class="nav-link">Add Post</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('all.post')); ?>" class="nav-link">All Posts</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo e(route('blogs.by.author')); ?>" class="nav-link">All Posts by Author</a>
            </li>

          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('user.comments')); ?>" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Comments</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('contact.message')); ?>" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Contacts</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="<?php echo e(route('uploads')); ?>" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Up/Downloads</span>
        </a>
      </li>




      <li class="nav-item">
        <a href="<?php echo e(route('site.settings')); ?>" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Site Settings</span>
        </a>
      </li>

    </ul>
  </div>
</nav><?php /**PATH C:\xampp\htdocs\pmway\resources\views\admin\partials\sidebar.blade.php ENDPATH**/ ?>