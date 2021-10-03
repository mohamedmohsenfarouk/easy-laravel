<?php $page="login";?>

<?php $__env->startSection('content'); ?>		

<div class="main-wrapper account-wrapper">
			<div class="account-page">
				<div class="account-center">
					<div class="account-box">
						<form action="#" class="form-signin">
							<div class="account-logo">
								<a href="index"><img src="assets/img/logo-dark.png" alt="Medifab"></a>
							</div>
							<div class="form-group">
								<label>Username or Email</label>
								<input type="text" autofocus="" class="form-control">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control">
							</div>
							<div class="form-group text-right">
								<a href="forgot-password">Forgot your password?</a>
							</div>
							<div class="form-group text-center">
								<button type="submit" class="btn btn-primary account-btn">Login</button>
							</div>
							<div class="text-center register-link">
								Don’t have an account? <a href="register">Register Now</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medifab-laravel\admin-template\resources\views/login.blade.php ENDPATH**/ ?>