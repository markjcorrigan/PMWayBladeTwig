<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="PMWay">
	<meta name="keywords" content="PMWay">

	<title>PMWay Blog</title>

  <!-- Fonts -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="<?php echo e(asset('../backend/assets/vendors/core/core.css')); ?>">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="<?php echo e(asset('../backend/assets/vendors/flatpickr/flatpickr.min.css')); ?>">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="<?php echo e(asset('../backend/assets/fonts/feather-font/css/iconfont.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('../backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')); ?>">
	<!-- endinject -->

  <!-- Layout styles -->
	<link rel="stylesheet" href="<?php echo e(asset('../backend/assets/css/demo2/style.css')); ?>">
  <!-- End layout styles -->

    <!--Favicon-->
    <link rel="icon" type="image/svg+xml" href="<?php echo e(asset('images/favicon.svg')); ?>">


  <!-- toaster link starts -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
   <!-- toaster link ends -->

   <!-- jquery cdn link starts -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <!-- jquery cdn link ends -->

   <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo e(asset('../../../backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css')); ?>">
  <!-- End plugin css for this page -->

</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
            <?php echo $__env->make('admin.partials.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
		<!-- partial -->

		<div class="page-wrapper">

			<!-- partial:partials/_navbar.html -->
                <?php echo $__env->make('admin.partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
			<!-- partial -->

            <div class="page-content">

                <?php echo $__env->yieldContent('admin'); ?>

            </div>

			<!-- partial:partials/_footer.html -->
			  <?php echo $__env->make('admin.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
			<!-- partial -->

		</div>
	</div>

	<!-- core:js -->
	<script src="<?php echo e(asset('../backend/assets/vendors/core/core.js')); ?>"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="<?php echo e(asset('../backend/assets/vendors/flatpickr/flatpickr.min.js')); ?>"></script>
  <script src="<?php echo e(asset('../backend/assets/vendors/apexcharts/apexcharts.min.js')); ?>"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="<?php echo e(asset('../backend/assets/vendors/feather-icons/feather.min.js')); ?>"></script>
	<script src="<?php echo e(asset('../backend/assets/js/template.js')); ?>"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="<?php echo e(asset('../backend/assets/js/dashboard-dark.js')); ?>"></script>
	<!-- End custom js for this page -->

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

	<!-- Plugin js for this page -->
	<script src="<?php echo e(asset('../../../backend/assets/vendors/datatables.net/jquery.dataTables.js')); ?>"></script>
	<script src="<?php echo e(asset('../../../backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js')); ?>"></script>
	  <!-- End plugin js for this page -->

	  <!-- Custom js for this page -->
  	<script src="<?php echo e(asset('../../../backend/assets/js/data-table.js')); ?>"></script>
  <!-- End custom js for this page -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="<?php echo e(asset('backend/assets/js/code.js')); ?>" ></script>



    <script src="<?php echo e(asset('js/tinymce/js/tinymce/tinymce.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\pmway\resources\views\admin\admin_dashboard.blade.php ENDPATH**/ ?>