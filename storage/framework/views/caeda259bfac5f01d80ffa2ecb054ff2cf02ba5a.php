<?php $page="edit-leave-type";?>

<?php $__env->startSection('content'); ?>		

<div class="page-wrapper">
				<div class="content">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<h4 class="page-title">Edit Leave Type</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<form>
								<div class="form-group">
									<label>Leave Type <span class="text-danger">*</span></label>
									<input class="form-control" type="text" value="Casual Leave">
								</div>
								<div class="form-group">
									<label>Number of days <span class="text-danger">*</span></label>
									<input class="form-control" type="text" value="12">
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary submit-btn">Save</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medifab-laravel\admin-template\resources\views/edit-leave-type.blade.php ENDPATH**/ ?>