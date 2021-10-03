
<?php $__env->startSection('content'); ?>		
<!-- Page Wrapper -->
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="crms-title row bg-white mb-4">
                		<div class="col  p-0">
                			<h3 class="page-title">
			                <span class="page-title-icon bg-gradient-primary text-white mr-2">
			                  <i class="fa fa-object-group" aria-hidden="true"></i>
			                </span> Form Mask</h3>
                		</div>
                		<div class="col p-0 text-right">
                			<ul class="breadcrumb bg-white float-right m-0 pl-0 pr-0">
								<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
								<li class="breadcrumb-item active">Form Mask</li>
							</ul>
                		</div>
                	</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card mb-0">
								<div class="card-header">
									<h4 class="card-title mb-0">Form Mask</h4>
									<p class="card-text py-3">Input masks can be used to force the user to enter data conform a specific format. Unlike validation, the user can't enter any other key than the ones specified by the mask.</p>
								</div>
								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<label>Phone</label>
											<input type="text" id="phone" class="form-control">
											<span class="form-text text-muted">(999) 999-9999</span>
										</div>
										<div class="form-group">
											<label>Date</label>
											<input type="text" id="date" class="form-control">
											<span class="form-text text-muted">dd/mm/yyyy</span>
										</div>
										<div class="form-group">
											<label>SSN field 1</label>
											<input type="text" id="ssn" class="form-control">
											<span class="form-text text-muted">e.g "999-99-9999"</span>
										</div>
										<div class="form-group">
											<label>Phone field + ext.</label>
											<input type="text" id="phoneExt" class="form-control">
											<span class="form-text text-muted">+40 999 999 999</span>
										</div>
										<div class="form-group">
											<label>Product Key</label>
											<input type="text" id="product" class="form-control">
											<span class="form-text text-muted">e.g a*-999-a999</span>
										</div>
										<div class="form-group">
											<label>Currency</label>
											<input type="text" id="currency" class="form-control">
											<span class="form-text text-muted">$ 999,999,999.99</span>
										</div>
										<div class="form-group">
											<label>Eye Script</label>
											<input type="text" id="eyescript" class="form-control">
											<span class="form-text text-muted">~9.99 ~9.99 999</span>
										</div>
										<div class="form-group">
											<label>Percent</label>
											<input type="text" id="pct" class="form-control">
											<span class="form-text text-muted">e.g "99%"</span>
										</div>
										<div class="form-group mb-0">
											<label>Credit Card Number</label>
											<input type="text" class="form-control" id="ccn">
											<span class="form-text text-muted">e.g "999.999.999.9999"</span>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crms-laravel\template\resources\views/form-mask.blade.php ENDPATH**/ ?>