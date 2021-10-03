<?php $page="coming-soon";?>

<?php $__env->startSection('content'); ?>		

<div class="main-wrapper coming-wrapper">
			<div class="table-cell">
				<div class="container">
					<div class="title-section">
						<h1 class="coming-title">Launching Soon</h1>
						<p class="sub-title">We’re working very hard on the new version of our site. Stay tuned!</p>
					</div>
					<div class="countdown" id="countdown">
						<ul>
							<li class="timer">
								<span class="days">365</span>
								<p class="countdown-period">Days</p>
							</li>
							<li class="seperator">:</li>
							<li class="timer">
								<span class="hours">23</span>
								<p class="countdown-period">Hours</p>
							</li>
							<li class="seperator">:</li>
							<li class="timer">
								<span class="minutes">45</span>
								<p class="countdown-period">Minutes</p>
							</li>
							<li class="seperator">:</li>
							<li class="timer">
								<span class="seconds">12</span>
								<p class="countdown-period">Seconds</p>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="newsletter">
						<h3>get notified about our launch</h3>
						<form>
							<input type="text" placeholder="Enter email address">
							<input class="notify-btn" type="submit" value="Notify Me">
						</form>
					</div>
				</div>
			</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medifab-laravel\admin-template\resources\views/coming-soon.blade.php ENDPATH**/ ?>