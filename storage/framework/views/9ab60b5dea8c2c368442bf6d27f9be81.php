<?php
   $siteSettings = App\Models\SiteSettings::findOrFail(1);
?>
<footer class="tj-footer-area">
    <div class="container">
       <div class="row">
          <div class="col-md-12 text-center">
             <div class="footer-logo-box">
                <a href="#"><img src="<?php echo e(asset($siteSettings->logo)); ?>" alt="" /></a>
             </div>
             <div class="footer-menu">










             </div>
             <div class="copy-text">
                <p>&copy; <?php echo e($siteSettings->footer_note); ?></p>
             </div>
          </div>
       </div>
    </div>
 </footer>
<?php /**PATH C:\xampp\htdocs\pmway\resources\views/frontend/partials/footer.blade.php ENDPATH**/ ?>