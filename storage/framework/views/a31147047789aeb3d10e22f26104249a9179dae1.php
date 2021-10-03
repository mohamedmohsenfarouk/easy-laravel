<?php $page="edit-role";?>

<?php $__env->startSection('content'); ?>		

<div class="page-wrapper">
				<div class="content">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<h4 class="page-title">Edit Role</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<form>
								<div class="form-group">
									<label>Role Name <span class="text-danger">*</span></label>
									<input class="form-control" value="Team Leader" type="text">
								</div>
								<div class="form-group">
									<label class="display-block">Status</label>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="status" id="role_active" value="option1" checked>
										<label class="form-check-label" for="role_active">
										Active
										</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="status" id="role_inactive" value="option2">
										<label class="form-check-label" for="role_inactive">
										Inactive
										</label>
									</div>
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
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medifab-laravel\admin-template\resources\views/edit-role.blade.php ENDPATH**/ ?>