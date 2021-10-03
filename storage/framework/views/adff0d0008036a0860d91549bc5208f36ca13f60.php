<?php $page="lock-screen";?>

<?php $__env->startSection('content'); ?>		

<div class="main-wrapper error-wrapper">
			<div class="error-box">
				<form action="index">
					<div class="lock-user">
						<img class="rounded-circle" src="assets/img/user.jpg" alt="">
						<h6>John Doe</h6>
					</div>
					<div class="form-group">
						<input class="form-control" placeholder="Enter Password" type="password">
					</div>
					<div class="text-center">
						<a href="forgot-password">Sign in as a different user?</a>
					</div>
				</form>
			</div>
		</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medifab-laravel\admin-template\resources\views/lock-screen.blade.php ENDPATH**/ ?>