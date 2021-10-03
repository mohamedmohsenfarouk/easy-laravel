<?php $page="expenses";?>

<?php $__env->startSection('content'); ?>		

<div class="page-wrapper">
				<div class="content">
					<div class="row">
						<div class="col-sm-8 col-5">
							<h4 class="page-title">Expenses</h4>
						</div>
						<div class="col-sm-4 col-7 text-right m-b-30">
							<a href="add-expense" class="btn btn-primary btn-rounded float-right"><i class="fas fa-plus"></i> Add Expense</a>
						</div>
					</div>
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
							<div class="form-group form-focus">
								<label class="focus-label">Item Name</label>
								<input type="text" class="form-control floating">
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
							<div class="form-group form-focus select-focus">
								<label class="focus-label">Purchased By</label>
								<select class="select floating">
									<option> -- Select -- </option>
									<option>Loren Gatlin</option>
									<option>Tarah Shropshire</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
							<div class="form-group form-focus select-focus">
								<label class="focus-label">Paid By</label>
								<select class="select floating">
									<option> -- Select -- </option>
									<option> Cash </option>
									<option> Cheque </option>
								</select>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
							<div class="form-group form-focus">
								<label class="focus-label">From</label>
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
							<div class="form-group form-focus">
								<label class="focus-label">To</label>
								<div class="cal-icon">
									<input class="form-control floating datetimepicker" type="text">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
							<a href="#" class="btn btn-success btn-block"> Search </a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table m-b-0 datatable">
									<thead>
										<tr>
											<th>Item</th>
											<th>Purchase From</th>
											<th>Purchase Date</th>
											<th>Purchased By</th>
											<th>Amount</th>
											<th>Paid By</th>
											<th class="text-center">Status</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<strong>Stretcher</strong>
											</td>
											<td>Hospital Equipment Inc</td>
											<td>17 Aug 2018</td>
											<td>Loren Gatlin</td>
											<td>$8048</td>
											<td>Cash</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="custom-badge status-red dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
													Pending
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Pending</a>
														<a class="dropdown-item" href="#">Approved</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="edit-expense"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_expense"><i class="fas fa-trash m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<strong>Anaesthetic machine</strong>
											</td>
											<td>Biomedical Equipment Inc</td>
											<td>22 Jun 2018</td>
											<td>Tarah Shropshire</td>
											<td>$62480</td>
											<td>Cheque</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="custom-badge status-green dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
													Approved
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Pending</a>
														<a class="dropdown-item" href="#">Approved</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="edit-expense"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_expense"><i class="fas fa-trash m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<strong>Aspiration/Suction Pump</strong>
											</td>
											<td>Medi Pro Service</td>
											<td>24 Jul 2018</td>
											<td>Tarah Shropshire</td>
											<td>$3250</td>
											<td>Cheque</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="custom-badge status-green dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
													Approved
													</a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="#">Pending</a>
														<a class="dropdown-item" href="#">Approved</a>
													</div>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown dropdown-action">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="edit-expense"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
														<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_expense"><i class="fas fa-trash m-r-5"></i> Delete</a>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
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
			<div id="delete_expense" class="modal fade delete-modal" role="dialog">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body text-center">
							<img src="assets/img/sent.png" alt="" width="50" height="46">
							<h3>Are you sure want to delete this expense?</h3>
							<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\medifab-laravel\admin-template\resources\views/expenses.blade.php ENDPATH**/ ?>