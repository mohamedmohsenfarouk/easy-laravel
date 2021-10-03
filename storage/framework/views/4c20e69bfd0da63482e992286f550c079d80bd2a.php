<?php $page="add-patient";?>

<?php $__env->startSection('content'); ?>		

<div class="page-wrapper">
				<div class="content">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<h4 class="page-title">Add Patient</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<form>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>First Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Last Name</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Username <span class="text-danger">*</span></label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Email <span class="text-danger">*</span></label>
											<input class="form-control" type="email">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Password</label>
											<input class="form-control" type="password">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Confirm Password</label>
											<input class="form-control" type="password">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Date of Birth</label>
											<div class="cal-icon">
												<input type="text" class="form-control datetimepicker">
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group gender-select">
											<label class="gen-label">Gender:</label>
											<div class="form-check-inline">
												<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input">Male
												</label>
											</div>
											<div class="form-check-inline">
												<label class="form-check-label">
												<input type="radio" name="gender" class="form-check-input">Female
												</label>
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<label>Address</label>
													<input type="text" class="form-control ">
												</div>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-3">
												<div class="form-group">
													<label>Country</label>
													<select class="form-control select">
														<option>USA</option>
														<option>United Kingdom</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-3">
												<div class="form-group">
													<label>City</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-3">
												<div class="form-group">
													<label>State/Province</label>
													<select class="form-control select">
														<option>California</option>
														<option>Alaska</option>
														<option>Alabama</option>
													</select>
												</div>
											</div>
											<div class="col-sm-6 col-md-6 col-lg-3">
												<div class="form-group">
													<label>Postal Code</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Phone </label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Avatar</label>
											<div class="profile-upload">
												<div class="upload-img">
													<img alt="" src="assets/img/user.jpg">
												</div>
												<div class="upload-input">
													<input type="file" class="form-control">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="display-block">Status</label>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="status" id="patient_active" value="option1" checked>
										<label class="form-check-label" for="patient_active">
										Active
										</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="status" id="patient_inactive" value="option2">
										<label class="form-check-label" for="patient_inactive">
										Inactive
										</label>
									</div>
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary submit-btn">Create Patient</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="notification-box">
					<div class="msg-sidebar notifications msg-noti">
						<div class="topnav-dropdown-header">
							<span>Messages</span>
						</div>
						<div class="drop-scroll msg-list-scroll">
							<ul class="list-box">
								<li>
									<a href="chat">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">R</span>
											</div>
											<div class="list-body">
												<span class="message-author">Richard Miles </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat">
										<div class="list-item new-message">
											<div class="list-left">
												<span class="avatar">J</span>
											</div>
											<div class="list-body">
												<span class="message-author">John Doe</span>
												<span class="message-time">1 Aug</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">T</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Tarah Shropshire </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">M</span>
											</div>
											<div class="list-body">
												<span class="message-author">Mike Litorus</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">C</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Catherine Manseau </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">D</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Domenic Houston </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">B</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Buster Wigton </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">R</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Rolland Webber </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">C</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Claire Mapes </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">M</span>
											</div>
											<div class="list-body">
												<span class="message-author">Melita Faucher</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">J</span>
											</div>
											<div class="list-body">
												<span class="message-author">Jeffery Lalor</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">L</span>
											</div>
											<div class="list-body">
												<span class="message-author">Loren Gatlin</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">T</span>
											</div>
											<div class="list-body">
												<span class="message-author">Tarah Shropshire</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="chat">See all messages</a>
						</div>
					</div>
				</div>
			</div>

		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medifab-laravel\admin-template\resources\views/add-patient.blade.php ENDPATH**/ ?>