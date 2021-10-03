<?php $page="forgot-password";?>

<?php $__env->startSection('content'); ?>		
	<div class="main-wrapper account-wrapper">
			<div class="account-page">
				<div class="account-center">
					<div class="account-box">
						<form class="form-signin" action="#">
							<div class="account-logo">
								<a href="index"><img src="assets/img/logo-dark.png" alt="Medifab"></a>
							</div>
							<div class="form-group">
								<label>Enter Your Email</label>
								<input type="text" class="form-control" autofocus>
							</div>
							<div class="form-group text-center">
								<button class="btn btn-primary account-btn" type="submit">Reset Password</button>
							</div>
							<div class="text-center register-link">
								<a href="login">Back to Login</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medifab-laravel\admin-template\resources\views/forgot-password.blade.php ENDPATH**/ ?>