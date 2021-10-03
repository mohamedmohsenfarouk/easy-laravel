<?php $page="error-404";?>

<?php $__env->startSection('content'); ?>		
	<!-- Main Wrapper -->
    <div class="main-wrapper text-center">
			
			<div class="error-box">
				<h1>404</h1>
				<h3><i class="fa fa-warning"></i> Oops! Page not found!</h3>
				<p>The page you requested was not found.</p>
				<a href="index" class="btn btn-custom btn-gradient-primary btn-rounded">Back to Home</a>
			</div>
		
        </div>
		<!-- /Main Wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crms-laravel\template\resources\views/error-404.blade.php ENDPATH**/ ?>