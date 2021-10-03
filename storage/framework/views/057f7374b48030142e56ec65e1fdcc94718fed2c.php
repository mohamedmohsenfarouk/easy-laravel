
<?php $__env->startSection('content'); ?>		
<!-- Page Wrapper -->
<div class="page-wrapper">
			
            <!-- Page Content -->
            <div class="content container-fluid">

                <div class="crms-title row bg-white">
                    <div class="col  p-0">
                        <h3 class="page-title m-0">
                        <span class="page-title-icon bg-gradient-primary text-white mr-2">
                          <i class="feather-calendar"></i>
                        </span> Activities </h3>
                    </div>
                    <div class="col p-0 text-right">
                        <ul class="breadcrumb bg-white float-right m-0 pl-0 pr-0">
                            <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Activities</li>
                        </ul>
                    </div>
                </div>

                <div class="page-header pt-3 mb-0 ">
                    <div class="row">
                        <div class="col">
                            <div class="dropdown">
                                <a class="dropdown-toggle recently-viewed" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> Propose Times </a>
                                <div class="dropdown-menu">
                                     <a class="dropdown-item" href="#">Recently Viewed</a>
                                    <a class="dropdown-item" href="#">Items I'm following</a>
                                    <a class="dropdown-item" href="#">All Activity</a>
                                    <a class="dropdown-item" href="#">All Closed Activity</a>
                                    <a class="dropdown-item" href="#">All Open Activity</a>
                                    <a class="dropdown-item" href="#">My Activity</a>
                                </div>
                            </div>
                        </div>
                        <div class="col text-right">
                            <ul class="list-inline-item pl-0">
                                
                                <li class="list-inline-item">
                                    <button class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded" id="add-task" data-toggle="modal" data-target="#add_activity">Add Activity</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                
                
                <!-- Content Starts -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="table-responsive activity-tables">
                                    <table class="table table-striped table-nowrap custom-table mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th class="checkBox">Done</th>
                                                <th>Subject</th>
                                                <th>Deal</th>
                                                <th>Contact Person</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Companies</th>
                                                <th class="text-left">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td><a href="#" data-toggle="modal" data-target="#add_activity">Call</a></td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Ansanio tech</a></td>
                                                <td>Cravo Ansanio</td>
                                                <td>anson@gmail.com</td>
                                                <td>9874565464</td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Soylent Corp</a></td>
                                                
                                                <td>
                                                    <div class="dropdown dropdown-action text-center">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right h-100">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td><a href="#" data-toggle="modal" data-target="#add_activity">Phone</a></td>
                                                <td><a href="#" data-toggle="modal" data-target="#deal-details"> Feneldo</a></td>
                                                <td>Williams</td>
                                                <td>williams@gmail.com</td>
                                                <td>9874565464</td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Umbrella</a></td>
                                                <td>
                                                    <div class="dropdown dropdown-action text-center">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right h-100">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td><a href="#" data-toggle="modal" data-target="#add_activity">Lunch</a></td>
                                                <td><a href="#" data-toggle="modal" data-target="#deal-details">Bensolet</a></td>
                                                <td>John Doe</td>
                                                <td>johndoe@gmail.com</td>
                                                <td>9874565464</td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Acme Corporation</a></td>
                                                <td>
                                                    <div class="dropdown dropdown-action text-center">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right h-100">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td><a href="#" data-toggle="modal" data-target="#add_activity">Call</a></td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Ansanio tech</a></td>
                                                <td>Cravo Ansanio</td>
                                                <td>anson@gmail.com</td>
                                                <td>9874565464</td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Soylent Corp</a></td>
                                                
                                                <td>
                                                    <div class="dropdown dropdown-action text-center">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right h-100">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td><a href="#" data-toggle="modal" data-target="#add_activity">Phone</a></td>
                                                <td><a href="#" data-toggle="modal" data-target="#deal-details"> Feneldo</a></td>
                                                <td>Williams</td>
                                                <td>williams@gmail.com</td>
                                                <td>9874565464</td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Umbrella</a></td>
                                                <td>
                                                    <div class="dropdown dropdown-action text-center">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right h-100">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td><a href="#" data-toggle="modal" data-target="#add_activity">Phone</a></td>
                                                <td><a href="#" data-toggle="modal" data-target="#deal-details"> Feneldo</a></td>
                                                <td>Williams</td>
                                                <td>williams@gmail.com</td>
                                                <td>9874565464</td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Umbrella</a></td>
                                                <td>
                                                    <div class="dropdown dropdown-action text-center">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right h-100">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                           
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td><a href="#" data-toggle="modal" data-target="#add_activity">Lunch</a></td>
                                                <td><a href="#" data-toggle="modal" data-target="#deal-details">Bensolet</a></td>
                                                <td>John Doe</td>
                                                <td>johndoe@gmail.com</td>
                                                <td>9874565464</td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Acme Corporation</a></td>
                                                <td>
                                                    <div class="dropdown dropdown-action text-center">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right h-100">
                                                            <a class="dropdown-item" href="#">Edit</a>
                                                           
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
                </div>
                <!-- /Content End -->
                
            </div>
            <!-- /Page Content -->
            
        </div>
        <!-- /Page Wrapper -->
        
    </div>
    <!-- /Main Wrapper -->
<!--system users Modal -->
<div class="modal right fade" id="company-details" tabindex="-1" role="dialog" aria-modal="true">
              <div class="modal-dialog" role="document">
                <button type="button" class="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close xs-close" data-dismiss="modal">×</button>
                    <div class="row w-100">
                      <div class="col-md-7 account d-flex">
                      	<div class="company_img">
                      		<img src="assets/img/c-logo.png" alt="User" class="user-image" class="img-fluid" />
                  		</div>
                  		<div>
                  			<p class="mb-0">Company</p>
                  			<span class="modal-title">Clampett Oil and Gas Corp</span>
                    		<span class="rating-star"><i class="fa fa-star" aria-hidden="true"></i></span>
                    		<span class="lock"><i class="fa fa-lock" aria-hidden="true"></i></span>
                  		</div>

                      </div>
                      <div class="col-md-5 text-right">
                        <ul class="list-unstyled list-style-none">
							<li class="dropdown list-inline-item"><br />
								<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> Actions </a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Edit This Company</a>
                              		<a class="dropdown-item" href="#">Change Organization Image</a>
                              		<a class="dropdown-item" href="#">Delete This Organization</a>
                              		<a class="dropdown-item" href="#">Change Record Owner</a>
                              		<a class="dropdown-item" href="#">Generate Merge Document</a>
                              		<a class="dropdown-item" href="#">Print This Organization</a>
                              		<a class="dropdown-item" href="#">Add New Task For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Event For Organization</a>
                              		<a class="dropdown-item" href="#">Add Activity Set To Organization</a>
                              		<a class="dropdown-item" href="#">Add New Contact For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Project For Organization</a>
								</div>
							</li>
                          
                        </ul>
                        
                      </div>
                    </div>
                   
                  </div>

                  <div class="card due-dates">
                  	<div class="card-body">
	                    <div class="row">
	                      <div class="col">
	                        <span>Title</span>
	                        <p>Enquiry</p>
	                      </div>
	                      <div class="col">
	                        <span>Companies</span>
	                        <p>Acme Corp</p>
	                      </div>
	                      <div class="col">
	                        <span>Phone</span>
	                        <p>9876764875</p>
	                      </div>
	                      <div class="col">
	                        <span>Email</span>
	                        <p>johndoe@gmail.com</p>
	                      </div>
	                      <div class="col">
	                        <span>Contact owner</span>
	                        <p>John Doe</p>
	                      </div>
	                    </div>
	                </div>
                  </div>

                  <div class="modal-body">
                    <div class="task-infos">
						<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
							<li class="nav-item"><a class="nav-link active" href="#task-details" data-toggle="tab">Details</a></li>
							<li class="nav-item"><a class="nav-link" href="#task-related" data-toggle="tab">Related</a></li>
							<li class="nav-item"><a class="nav-link" href="#task-activity" data-toggle="tab">Activity</a></li>
							
							<li class="nav-item"><a class="nav-link" href="#task-news" data-toggle="tab">News</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane show active" id="task-details">
								<div class="crms-tasks">
							  	<div class="tasks__item crms-task-item active">
							    	<div class="accordion-header js-accordion-header">Organization Name</div> 
								  	<div class="accordion-body js-accordion-body">
									    <div class="accordion-body__contents">
										    <table class="table">
				                                <tbody>
				                                  <tr>
				                                    <td class="border-0">Record ID</td>
				                                    <td class="border-0">124192692</td>
				                                  </tr>
				                                  <tr>
				                                    <td>Organization Name</td>
				                                    <td>Clampett Oil and Gas Corp.</td>
				                                  </tr>
				                                </tbody>
				                            </table>
									    </div>
								    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Organization Contact Details</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<table class="table">
			                                <tbody>
			                                  <tr>
			                                    <td class="border-0">Phone</td>
			                                    <td class="border-0">(626) 847-1294</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Fax</td>
			                                    <td>1234</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Website</td>
			                                    <td>google.com</td>
			                                  </tr>
			                                  <tr>
			                                    <td>LinkedIn</td>
			                                    <td>Lorem ipsum</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Facebook</td>
			                                    <td>lorem Ipsum</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Twitter</td>
			                                    <td>Not Started</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Email Domains</td>
			                                    <td>abc@gmail.com</td>
			                                  </tr>
			                                </tbody>
			                              </table>
								    </div>
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Address Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								        <table class="table">
			                                <tbody>
			                                  <tr>
			                                    <td class="border-0">Billing Address</td>
			                                    <td class="border-0">1000 Escalon Street, Palo Alto, CA, 94020, United States map</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Shipping Addres</td>
			                                    <td>United States</td>
			                                  </tr>
			                                </tbody>
		                                </table>
								    </div>
								    
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Additional Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<table class="table">
			                                <tbody>
			                                  <tr>
			                                    <td>Dates to remember</td>
			                                    <td>09/12/2005</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Organization Created</td>
			                                    <td>03-Jun-20 1:14 AM</td>
			                                  </tr>
			                                   <tr>
			                                    <td>Date of Next Activity </td>
			                                    <td>09/12/2005</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Date of Last Activity </td>
			                                    <td>27/01/2006</td>
			                                  </tr>
			                                </tbody>
			                             </table>
								    </div>
								    
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Description Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<table class="table">
			                                <tbody>
			                                  <tr>
			                                    <td>Description</td>
			                                    <td>Lorem ipsum </td>
			                                  </tr>
			                                </tbody>
			                             </table>
								    </div>
							    </div>
							  </div>
							 
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Tag Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      <table class="table">
			                                <tbody>
			                                  <tr>
			                                    <td class="border-0">Tag List</td>
			                                    <td class="border-0">Lorem Ipsum</td>
			                                  </tr>
			                                </tbody>
			                              </table>
								    </div>
								    
							    </div>
							  </div>
							</div>
							</div>
								
							<div class="tab-pane task-related" id="task-related">
								<div class="row">
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Companies</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-info card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Deals</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-success card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Projects</h4>
		                                  <span>1</span>
		                                </div>
		                              </div>
		                            </div>
		                        </div>
		                        <div class="row pt-3">
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-success card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Contacts</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Notes</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-info card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Files</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                        </div>
		                        <div class="row">
		                        	<div class="crms-tasks p-2">
			                        	<div class="tasks__item crms-task-item active">
										    <div class="accordion-header js-accordion-header">Companies</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Company Name</th>
																	<th>Phone</th>
																	<th>Billing Country</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		<a href="#" class="avatar"><img alt="" src="assets/img/c-logo2.png"></a>
																		<a href="#" data-toggle="modal" data-target="#company-details">Clampett Oil and Gas Corp.</a>
																	</td>
																	<td>8754554531</td>
																	<td>United States</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<a href="#" class="avatar"><img alt="" src="assets/img/c-logo.png"></a>
																		<a href="#" data-toggle="modal" data-target="#company-details">Acme Corporation</a>
																	</td>
																	<td>8754554531</td>
																	<td>United States</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Deals</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Deal Name</th>
																	<th>Company</th>
																	<th>User Responsible</th>
																	<th>Deal Value</th>
																	<th></th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Bensolet
																	</td>
																	<td>Globex</td>
																	<td>John Doe</td>
																	<td>USD $‎180</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i></td>
																	
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		Ansanio tech
																	</td>
																	<td>Lecto</td>
																	<td>John Smith</td>
																	<td>USD $‎180</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i></td>
																	
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Projects</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Project Name</th>
																	<th>Status</th>
																	<th>User Responsible</th>
																	<th>Date Created</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		Wilmer Deluna
																	</td>
																	<td>Completed</td>
																	<td>Williams</td>
																	<td>13-Jul-20 11:37 PM</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Contacts</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Name</th>
																	<th>Title</th>
																	<th>phone</th>
																	<th>Email</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Wilmer Deluna
																	</td>
																	<td>Call Enquiry</td>
																	<td>987675656</td>
																	<td>william@gmail.com</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		John Doe
																	</td>
																	<td>Enquiry</td>
																	<td>987675656</td>
																	<td>john@gmail.com</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Notes </div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Name</th>
																	<th>Size</th>
																	<th>Category</th>
																	<th>Date Added</th>
																	<th>Added by</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Document
																	</td>
																	<td>50KB</td>
																	<td>Email</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>John Doe</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		Finance
																	</td>
																	<td>100KB</td>
																	<td>Phone call</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>Smith</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Files </div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Name</th>
																	<th>Size</th>
																	<th>Category</th>
																	<th>Date Added</th>
																	<th>Added by</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Document
																	</td>
																	<td>50KB</td>
																	<td>Phone Enquiry</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>John Doe</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		Finance
																	</td>
																	<td>100KB</td>
																	<td>Email</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>Smith</td>
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
									</div>
		                        </div>
							</div>
							<div class="tab-pane" id="task-activity">
								<div class="row">
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Total Activities</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-info card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Last Activity</h4>
		                                  <span>1</span>
		                                </div>
		                              </div>
		                            </div>
		                            
		                        </div>
		                        
		                        <div class="row">
		                        	<div class="crms-tasks  p-2">
			                        	<div class="tasks__item crms-task-item active">
										    <div class="accordion-header js-accordion-header">Upcoming Activity </div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Type</th>
																	<th>Activity Name</th>
																	<th>Assigned To</th>
																	<th>Due Date</th>
																	<th>Status</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Meeting
																	</td>
																	<td>Call Enquiry</td>
																	<td>John Doe</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>
																		<label class="container-checkbox">
																		  	<input type="checkbox" checked>
																		  	<span class="checkmark"></span>
																		</label>
																	</td>

										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Add New Task</a>
												                                <a class="dropdown-item" href="#">Add New Event</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		Meeting
																	</td>
																	<td>Phone Enquiry</td>
																	<td>David</td>
																	<td>13-Jul-20 11:37 PM</td>
																	
																	<td>
																		<label class="container-checkbox">
																		  	<input type="checkbox" checked>
																		  	<span class="checkmark"></span>
																		</label>
																	</td>
																	
										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Add New Task</a>
												                                <a class="dropdown-item" href="#">Add New Event</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Past Activity </div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Type</th>
																	<th>Activity Name</th>
																	<th>Assigned To</th>
																	<th>Due Date</th>
																	<th>Status</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Meeting
																	</td>
																	<td>Call Enquiry</td>
																	<td>John Doe</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>
																		<label class="container-checkbox">
																		  	<input type="checkbox" checked>
																		  	<span class="checkmark"></span>
																		</label>
																	</td>

										                            <td class="text-center">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Add New Task</a>
												                                <a class="dropdown-item" href="#">Add New Event</a>
												                                
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
									</div>
		                        </div>
							</div>
							<div class="tab-pane" id="task-news">
								<div class="row">
									<div class="col-md-12">
										<h4>News Items</h4>
										<p>Current news items about this Organization are sourced from Google News</p>
									</div>
								</div>
							</div>
						</div>
                   
                  </div>
                </div>

                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->

		
		<!-- Modal -->
			<div class="modal right fade" id="add_activity" tabindex="-1" role="dialog" aria-modal="true">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <button type="button" class="close md-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close xs-close" data-dismiss="modal">×</button>
                      <h4 class="modal-title">Schedule an Activity</h4>
                    </div>
                    <div class="modal-body">
                      <form class="forms-sampme">
                        <div class="row">
                          
                          <div class="col-sm-12">
                            <div class="form-group">
                              <input class="form-control" type="text" name="deal-name" id="deal-name" value="Call">
                            </div>
                            <div class="btn-group mb-3">
                              <button type="button" class="btn btn-light"><i class="fa fa-phone" aria-hidden="true"></i></button>
                              <button type="button" class="btn btn-light"><i class="fa fa-users" aria-hidden="true"></i></button>
                              <button type="button" class="btn btn-light"><i class="fa fa-clock-o" aria-hidden="true"></i></button>
                              <button type="button" class="btn btn-light"><i class="fa fa-flag" aria-hidden="true"></i></button>
                              <button type="button" class="btn btn-light"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                              <button type="button" class="btn btn-light"><i class="fa fa-cutlery" aria-hidden="true"></i></button>
                            </div>
                          </div>

                          <div class="col-sm-12">
                            <div class="form-group">
                              <div class="row">
                              <div class="col-md-3">
                                 <div class="cal-icon"><input class="form-control datetimepicker" type="text" placeholder="MM/DD/YY"></div>
                              </div>
                              <div class="col-md-3">
                                 <select class="form-control">
                                  <option>02:00</option>
                                  <option>03:00</option>
                               </select>
                              </div>
                              <div class="col-md-3">
                                 <select class="form-control">
                                  <option>02:00</option>
                                  <option>03:00</option>
                                
                               </select>
                              </div>
                              <div class="col-md-3">
                                 <div class="cal-icon"><input class="form-control datetimepicker" type="text" placeholder="MM/DD/YY"></div>
                              </div>
                            </div>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <div class="row m-0">
                                <p>Add <a href="">Guests</a>, <a href="">Location</a>, <a href="">Description</a></p>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <select class="form-control">
                                  <option>Busy</option>
                                  <option>Free</option>
                               </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <textarea class="form-control mb-2" rows="3" placeholder="Notes"></textarea>
                              <span class="pt-2">Notes are private and visible only within your Pipedrive account</span>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <select class="form-control">
                                  <option>John Doe</option>
                                  <option>John Smith</option>
                               </select>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Deal or Lead">
                              
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="People">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Organization">
                            </div>
                          </div>
                          
                        </div>
                        
                        <div class="submit-section mt-0">
                          <div class="custom-check mb-4">
                            <input type="checkbox" id="mark-as-done">
                            <label for="mark-as-done">Mark as Done</label>
                            </div>
                           
                        </div>
                        <div class="text-center">
		                	<button type="button" class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>&nbsp;&nbsp;
		                	<button type="button" class="btn btn-secondary btn-rounded">Cancel</button>
		                </div>
                      </form>
                    </div>
                  </div>
                </div>
			</div><!-- modal -->

			<!--Deal details Modal -->
            <div class="modal right fade" id="deal-details" tabindex="-1" role="dialog" aria-modal="true">
              <div class="modal-dialog" role="document">
                <button type="button" class="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close xs-close" data-dismiss="modal">×</button>
                    <div class="row w-100">
                      <div class="col-md-7 account">
                        <p class="User-name">Deal</p>
                        <span><img src="assets/img/c-logo.png" alt="User" class="user-image" /></span>
                        <span class="modal-title">Globex</span>&nbsp;
                        <span class="rating-star"><i class="fa fa-star" aria-hidden="true"></i></span>&nbsp;
                        <span class="lock"><i class="fa fa-lock" aria-hidden="true"></i></span>
                      </div>
                      <div class="col-md-5 text-right">
                        <ul class="list-unstyled list-style-none">
							<li class="dropdown list-inline-item"><br />
								<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> Actions </a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Edit This Company</a>
                              		<a class="dropdown-item" href="#">Change Organization Image</a>
                              		<a class="dropdown-item" href="#">Delete This Organization</a>
                              		<a class="dropdown-item" href="#">Change Record Owner</a>
                              		<a class="dropdown-item" href="#">Generate Merge Document</a>
                              		<a class="dropdown-item" href="#">Print This Organization</a>
                              		<a class="dropdown-item" href="#">Add New Task For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Event For Organization</a>
                              		<a class="dropdown-item" href="#">Add Activity Set To Organization</a>
                              		<a class="dropdown-item" href="#">Add New Contact For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Opportunity For Organization</a>
                              		<a class="dropdown-item" href="#">Add New Project For Organization</a>
								</div>
							</li>
                          
                        </ul>
                        
                      </div>
                    </div>
                   
                  </div>

                  <div class="card shadow p-2 due-dates">
                    <div class="row m-0">
                      <div class="col">
                        <span>Title</span>
                        <p></p>
                      </div>
                      <div class="col">
                        <span>Companies</span>
                        <p></p>
                      </div>
                      <div class="col">
                        <span>Phone</span>
                        <p>9876764875</p>
                      </div>
                      <div class="col">
                        <span>Email</span>
                        <p>johndoe@gmail.com</p>
                      </div>
                      <div class="col">
                        <span>Contact owner</span>
                        <p>John Doe</p>
                      </div>
                    </div>
                  </div>

                  <div class="modal-body">
                  	<div class="row pb-2">
	                    <div class="col">
	                        <span>Pipeline: Deal Pipeline</span>
	                    </div>
	                    <div class="col text-right">
	                        <span>Deal State: closed won</span>
	                    </div>
                    </div>
                  	<div class="row">
                  		<div class="pipeline-small flat pl-3 pr-3 w-100">
		                    <a class="won noselect tipped-top text-white" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pipeline: Deal Pipeline">&nbsp;<i class="fa fa-check" aria-hidden="true"></i><br><span>Prospecting</span></a>
		                    <a class="won noselect tipped-top bg-gray text-white" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pipeline: Deal Pipeline">&nbsp;<i class="fa fa-check" aria-hidden="true"></i><br><span>Qualification</span></a>
		                    <a class="won noselect tipped-top text-white" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pipeline: Deal Pipeline">&nbsp;<i class="fa fa-check" aria-hidden="true"></i><br><span>Needs Analysis</span></a>
		                    <a class="won noselect tipped-top text-white" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pipeline: Deal Pipeline">&nbsp;<i class="fa fa-check" aria-hidden="true"></i><br><span>Proposals</span></a>
		                    <a class="won noselect tipped-top text-white" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pipeline: Deal Pipeline">&nbsp;<i class="fa fa-check" aria-hidden="true"></i><br><span>Nogatiation</span></a>
		                    <a class="won noselect tipped-top text-white padding" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pipeline: Deal Pipeline">&nbsp;closed win</a>
	                    </div>
                  	</div>
                    <div class="task-infos pt-3">
						<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
							<li class="nav-item"><a class="nav-link active" href="#pipeline-task-details" data-toggle="tab">Details</a></li>
							<li class="nav-item"><a class="nav-link" href="#pipeline-task-related" data-toggle="tab">Related</a></li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane show active" id="pipeline-task-details">
								<div class="crms-tasks">
							  	<div class="tasks__item crms-task-item active">
							    	<div class="accordion-header js-accordion-header">Task Details</div> 
								  	<div class="accordion-body js-accordion-body">
									    <div class="accordion-body__contents">
										    <table class="table">
				                                <tbody>
				                                    <tr>
				                                      <td>Record ID</td>
				                                      <td>124192692</td>
				                                    </tr>
				                                    <tr>
				                                      <td>Task Name</td>
				                                      <td>1. Personalize your account</td>
				                                    </tr>
				                                    <tr>
				                                      <td>Assigned To</td>
				                                      <td>John Doe</td>
				                                    </tr>
				                                    <tr>
				                                      <td>Date Due</td>
				                                      <td>-</td>
				                                    </tr>
				                                </tbody>
				                            </table>
									    </div>
								    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Additional Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<table class="table">
			                                <tbody>
			                                    <tr>
			                                      <td>Start Date</td>
			                                      <td>-</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Reminder Date</td>
			                                      <td>-</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Repeats</td>
			                                      <td></td>
			                                    </tr>
			                                    <tr>
			                                      <td>Progress</td>
			                                      <td>0%</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Priorit</td>
			                                      <td>Medium</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Status</td>
			                                      <td>Not Started</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Last Updated</td>
			                                      <td>04-Jun-20</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Created</td>
			                                      <td>03-Jun-20 1:14 AM</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Task Created By</td>
			                                      <td>John Doe</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Task Owner</td>
			                                      <td>John Doe</td>
			                                    </tr>
			                                </tbody>
			                            </table>
								    </div>
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Related To</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								        <table class="table">
			                                <tbody>
			                                    <tr>
			                                      <td>Related To</td>
			                                      <td>-</td>
			                                    </tr>
			                                </tbody>
		                                </table>
								    </div>
								    
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Description Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<table class="table">
		                                  	<tbody>
			                                    <tr>
			                                      <td>Description</td>
			                                      <td>-</td>
			                                    </tr>
		                                  	</tbody>
		                                </table>
								    </div>
								    
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Task Comments</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<button class="btn btn-secondary text-white w-25">Add Comments</button>
								    </div>
							    </div>
							  </div>
							 
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Permissions</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<table class="table">
		                                  	<tbody>
			                                    <tr>
			                                      <td>Task visibility</td>
			                                      <td>Private</td>
			                                    </tr>
		                                  	</tbody>
		                                </table>
								    </div>
								    
							    </div>
							  </div>
							</div>
							</div>
								
							<div class="tab-pane task-related" id="pipeline-task-related">
								<div class="row pt-3">
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Companies</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-info card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Deals</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-success card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Projects</h4>
		                                  <span>1</span>
		                                </div>
		                              </div>
		                            </div>
		                        </div>
		                        <div class="row pt-3 pb-4">
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-success card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Contacts</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Notes</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-info card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Files</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                        </div>
		                        <div class="row">
		                        	<div class="crms-tasks  p-2">
			                        	<div class="tasks__item crms-task-item active">
										    <div class="accordion-header js-accordion-header">Companies <span class="badge badge-secondary float-right">2</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Company Name</th>
																	<th>Phone</th>
																	<th>Billing Country</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		<a href="#" class="avatar"><img alt="" src="assets/img/c-logo2.png"></a>
																		<a href="#" data-toggle="modal" data-target="#company-details">Clampett Oil and Gas Corp.</a>
																	</td>
																	<td>8754554531</td>
																	<td>United States</td>
										                            <td class="text-right">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<a href="#" class="avatar"><img alt="" src="assets/img/c-logo.png"></a>
																		<a href="#" data-toggle="modal" data-target="#company-details">Acme Corporation</a>
																	</td>
																	<td>8754554531</td>
																	<td>United States</td>
										                            <td class="text-right">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Deals <span class="badge badge-secondary float-right">2</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Deal Name</th>
																	<th>Company</th>
																	<th>User Responsible</th>
																	<th>Deal Value</th>
																	<th></th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Bensolet
																	</td>
																	<td>Globex</td>
																	<td>John Doe</td>
																	<td>USD $‎180</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i></td>
																	
										                            <td class="text-right">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		Ansanio tech
																	</td>
																	<td>Lecto</td>
																	<td>John Smith</td>
																	<td>USD $‎180</td>
																	<td><i class="fa fa-star" aria-hidden="true"></i></td>
																	
										                            <td class="text-right">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Projects <span class="badge badge-secondary float-right">1</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Project Name</th>
																	<th>Status</th>
																	<th>User Responsible</th>
																	<th>Date Created</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		Wilmer Deluna
																	</td>
																	<td>Completed</td>
																	<td>Williams</td>
																	<td>13-Jul-20 11:37 PM</td>
										                            <td class="text-right">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Contacts <span class="badge badge-secondary float-right">2</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Name</th>
																	<th>Title</th>
																	<th>phone</th>
																	<th>Email</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Wilmer Deluna
																	</td>
																	<td>Call Enquiry</td>
																	<td>987675656</td>
																	<td>william@gmail.com</td>
										                            <td class="text-right">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		John Doe
																	</td>
																	<td>Enquiry</td>
																	<td>987675656</td>
																	<td>john@gmail.com</td>
										                            <td class="text-right">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Notes <span class="badge badge-secondary float-right">2</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Name</th>
																	<th>Size</th>
																	<th>Category</th>
																	<th>Date Added</th>
																	<th>Added by</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Document
																	</td>
																	<td>50KB</td>
																	<td>-</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>John Doe</td>
										                            <td class="text-right">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		Finance
																	</td>
																	<td>100KB</td>
																	<td>-</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>Smith</td>
										                            <td class="text-right">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Files <span class="badge badge-secondary float-right">2</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    	<div class="table-responsive">
														<table class="table table-striped table-nowrap custom-table mb-0 datatable">
															<thead>
																<tr>
																	<th>Name</th>
																	<th>Size</th>
																	<th>Category</th>
																	<th>Date Added</th>
																	<th>Added by</th>
																	<th class="text-right">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	
																	<td>
																		Document
																	</td>
																	<td>50KB</td>
																	<td>-</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>John Doe</td>
										                            <td class="text-right">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	
																	<td>
																		Finance
																	</td>
																	<td>100KB</td>
																	<td>-</td>
																	<td>13-Jul-20 11:37 PM</td>
																	<td>Smith</td>
										                            <td class="text-right">
																		<div class="dropdown dropdown-action">
																			<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
																			<div class="dropdown-menu dropdown-menu-right">
																				<a class="dropdown-item" href="#">Edit Link</a>
												                                <a class="dropdown-item" href="#">Delete Link</a>
												                                
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
									</div>
		                        </div>
							</div>
						</div>
                   
                  </div>
                </div>

                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->

			<!--system users Modal -->
            <div class="modal right fade" id="system-user" tabindex="-1" role="dialog" aria-modal="true">
              <div class="modal-dialog" role="document">
                <button type="button" class="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close xs-close" data-dismiss="modal">×</button>
                    <div class="row w-100">
                      <div class="col-md-7 account">
                        <p class="User-name">System User</p>
                        <span><img src="assets/img/system-user.png" alt="User" class="user-image" /></span>
                        <span class="modal-title users">John Doe</span>&nbsp;
                        <span class="rating-star"><i class="fa fa-star" aria-hidden="true"></i></span>&nbsp;
                        <span class="lock"><i class="fa fa-lock" aria-hidden="true"></i></span>
                      </div>
                      <div class="col-md-5 text-right">
                        <ul class="list-unstyled list-style-none">
							<li class="dropdown list-inline-item"><br />
								<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> Actions </a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Edit This Contact</a>
	                              	<a class="dropdown-item" href="#">Change Contact Image</a>
	                             	 <a class="dropdown-item" href="#">Delete This Contact</a>
	                              	<a class="dropdown-item" href="#">Clone This Contact</a>
	                              	<a class="dropdown-item" href="#">Change Record Owner</a>
	                              	<a class="dropdown-item" href="#">Generate Merge Document</a>
	                              	<a class="dropdown-item" href="#">Change Contact To Lead</a>
	                              	<a class="dropdown-item" href="#">Print This Contact</a>
	                              	<a class="dropdown-item" href="#">Email This Contact</a>
	                              	<a class="dropdown-item" href="#">Add New Task For Contact</a>
	                             	 <a class="dropdown-item" href="#">Add New Event For Contact</a>
	                              	<a class="dropdown-item" href="#">Add Activity Set To Contact</a>
	                              	<a class="dropdown-item" href="#">Add New Deal For Contact</a>
	                             	 <a class="dropdown-item" href="#">Add New Project For Contact</a>
								</div>
							</li>
                          
                        </ul>
                        
                      </div>
                    </div>
                   
                  </div>

                  <div class="card shadow p-2 due-dates">
                    <div class="row m-0">
                      <div class="col">
                        <span>Title</span>
                        <p></p>
                      </div>
                      <div class="col">
                        <span>Companies</span>
                        <p></p>
                      </div>
                      <div class="col">
                        <span>Phone</span>
                        <p>9876764875</p>
                      </div>
                      <div class="col">
                        <span>Email</span>
                        <p>johndoe@gmail.com</p>
                      </div>
                      <div class="col">
                        <span>Contact owner</span>
                        <p>John Doe</p>
                      </div>
                    </div>
                  </div>

                  <div class="modal-body">
                    <div class="task-infos">
						<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
							<li class="nav-item"><a class="nav-link active" href="#task-details" data-toggle="tab">Details</a></li>
							<li class="nav-item"><a class="nav-link" href="#task-related" data-toggle="tab">Related</a></li>
							<li class="nav-item"><a class="nav-link" href="#task-activity" data-toggle="tab">Activity</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane show active" id="task-details">
								<div class="crms-tasks">
							  	<div class="tasks__item crms-task-item active">
							    	<div class="accordion-header js-accordion-header">Name & Occupation</div> 
								  	<div class="accordion-body js-accordion-body">
									    <div class="accordion-body__contents">
									      <table class="table">
				                                <tbody>
				                                  <tr>
				                                    <td class="border-0">Record ID</td>
				                                    <td class="border-0">124192692</td>
				                                  </tr>
				                                  <tr>
				                                    <td class="border-0">Name</td>
				                                    <td class="border-0">John Doe</td>
				                                  </tr>
				                                  <tr>
				                                    <td>Company</td>
				                                    <td></td>
				                                  </tr>
				                                  <tr>
				                                    <td>Title</td>
				                                    <td>-</td>
				                                  </tr>
				                                </tbody>
				                            </table>
									    </div>
								    </div>
							  </div>
							  <div class="tasks__item crms-task-item active">
							    <div class="accordion-header js-accordion-header">Contact Details</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<table class="table">
			                                <tbody>
			                                  <tr>
			                                    <td class="border-0">Email</td>
			                                    <td class="border-0">johndoe@gmail.com</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Email Opted out</td>
			                                    <td>
			                                      <div class="form-check m-0 pl-0">
			                                        <label class="form-check-label">
			                                          <input class="checkbox" type="checkbox"> <i class="input-helper"></i><i class="input-helper"></i><i class="input-helper"></i></label>
			                                      </div>
			                                    </td>
			                                  </tr>
			                                  <tr>
			                                    <td>Phone</td>
			                                    <td></td>
			                                  </tr>
			                                  <tr>
			                                    <td>Home Phone</td>
			                                    <td></td>
			                                  </tr>
			                                  <tr>
			                                    <td>Mobile Phone</td>
			                                    <td></td>
			                                  </tr>
			                                  <tr>
			                                    <td>Other Phone</td>
			                                    <td></td>
			                                  </tr>
			                                  <tr>
			                                    <td>Assistant Phone</td>
			                                    <td></td>
			                                  </tr>
			                                  <tr>
			                                    <td>Assistant Name</td>
			                                    <td></td>
			                                  </tr>
			                                  <tr>
			                                    <td>Fax</td>
			                                    <td></td>
			                                  </tr>
			                                  <tr>
			                                    <td>Linkedin</td>
			                                    <td></td>
			                                  </tr>
			                                  <tr>
			                                    <td>Facebook</td>
			                                    <td></td>
			                                  </tr>
			                                  <tr>
			                                    <td>Twitter</td>
			                                    <td></td>
			                                  </tr>
			                                  
			                                </tbody>
			                            </table>
								    </div>
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item active">
							    <div class="accordion-header js-accordion-header">Address Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      <table class="table">
		                                <tbody>
		                                  <tr>
		                                    <td class="border-0">Mailling Address</td>
		                                    <td class="border-0">-</td>
		                                  </tr>
		                                  <tr>
		                                    <td>Other Address</td>
		                                    <td>-</td>
		                                  </tr>
		                                </tbody>
		                              </table>
								    </div>
								    
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item active">
							    <div class="accordion-header js-accordion-header">Dates To Remember</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      <table class="table">
			                                <tbody>
			                                  <tr>
			                                    <td class="border-0">Dates to Remember</td>
			                                    <td class="border-0">-</td>
			                                  </tr>
			                                  <tr>
			                                    <td>Date of Birth</td>
			                                    <td>-</td>
			                                  </tr>
			                                  
			                                </tbody>
			                              </table>
								    </div>
								    
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item active">
							    <div class="accordion-header js-accordion-header">Additional Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<table class="table">
			                                <tbody>
				                                  <tr>
				                                    <td class="border-0">Date of Next Activity</td>
				                                    <td class="border-0">-</td>
				                                  </tr>
				                                  <tr>
				                                    <td>Date of Last Activity</td>
				                                    <td>-</td>
				                                  </tr>
				                                  <tr>
				                                    <td>Contact Owner</td>
				                                    <td>John Doe</td>
				                                  </tr>
				                                  <tr>
				                                    <td>Contact Created</td>
				                                    <td>Jun 20, 2020</td>
				                                  </tr>
			                                  
			                                	</tbody>
			                              	</table>
								    </div>
								    
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item active">
							    <div class="accordion-header js-accordion-header">Description Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      <table class="table">
			                                <tbody>
				                                <tr>
				                                    <td class="border-0">Description</td>
				                                    <td class="border-0">Lorem Ipsum</td>
				                                </tr>
			                                </tbody>
			                              </table>
								    </div>
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item active">
							    <div class="accordion-header js-accordion-header">Tag List</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      <table class="table">
			                                <tbody>
			                                  <tr>
			                                    <td class="border-0">Tag List</td>
			                                    <td class="border-0">Lorem Ipsum</td>
			                                  </tr>
			                                </tbody>
			                              </table>
								    </div>
								    
							    </div>
							  </div>
							</div>
							</div>
								
							<div class="tab-pane task-related" id="task-related">
								<div class="row pt-3">
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Companies</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-info card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Deals</h4>
		                                  <span>1</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-success card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Projects</h4>
		                                  <span>1</span>
		                                </div>
		                              </div>
		                            </div>
		                        </div>
		                        <div class="row pt-3 pb-4">
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-success card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Contacts</h4>
		                                  <span></span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Notes</h4>
		                                  <span></span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-info card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Files</h4>
		                                  <span>1</span>
		                                </div>
		                              </div>
		                            </div>
		                        </div>
		                        <div class="row">
		                        	<div class="crms-tasks  p-2">
			                        	<div class="tasks__item crms-task-item active">
										    <div class="accordion-header js-accordion-header">Companies <span class="badge badge-secondary float-right">0</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Deals <span class="badge badge-secondary float-right">0</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Projects <span class="badge badge-secondary float-right">0</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Contacts <span class="badge badge-secondary float-right">0</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Notes <span class="badge badge-secondary float-right">0</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Files <span class="badge badge-secondary float-right">0</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    </div>
										    </div>
										</div>
									</div>
		                        </div>
							</div>
							<div class="tab-pane" id="task-activity">
								<div class="row pt-3">
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Total Activities</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-info card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Emails</h4>
		                                  <span>1</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-success card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Tasks</h4>
		                                  <span>1</span>
		                                </div>
		                              </div>
		                            </div>
		                        </div>
		                        <div class="row pt-3 pb-4">
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-success card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Events</h4>
		                                  <span></span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Last Activity</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                           
		                        </div>
		                        <div class="row">
		                        	<div class="crms-tasks  p-2">
			                        	<div class="tasks__item crms-task-item active">
										    <div class="accordion-header js-accordion-header">Upcoming Activity <span class="badge badge-secondary float-right">0</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Past Activity <span class="badge badge-secondary float-right">0</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    </div>
										    </div>
										</div>
									</div>
		                        </div>
							</div>
						</div>
                  </div>
                </div>

                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->

            <!--Deal details Modal -->
            <div class="modal right fade" id="project-details" tabindex="-1" role="dialog" aria-modal="true">
              <div class="modal-dialog" role="document">
                <button type="button" class="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close xs-close" data-dismiss="modal">×</button>
                    <div class="row w-100">
                      <div class="col-md-7 account">
                        <p class="User-name">Project</p>
                        <span><img src="assets/img/c-logo.png" alt="User" class="user-image" /></span>
                        <span class="modal-title">Whirligig G990</span>&nbsp;
                        <span class="rating-star"><i class="fa fa-star" aria-hidden="true"></i></span>&nbsp;
                        <span class="lock"><i class="fa fa-lock" aria-hidden="true"></i></span>
                      </div>
                      <div class="col-md-5 text-right">
                        <ul class="list-unstyled list-style-none">
							<li class="dropdown list-inline-item"><br />
								<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> Actions </a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Edit This Project</a>
                                  	<a class="dropdown-item" href="#">Change Project Image</a>
                                  	<a class="dropdown-item" href="#">Clone This Project</a>
                                  	<a class="dropdown-item" href="#">Delete This Project</a>
                                  	<a class="dropdown-item" href="#">Change Record Owner</a>
                                  	<a class="dropdown-item" href="#">Generate Merge Document</a>
                                  	<a class="dropdown-item" href="#">Print This Project</a>
                                  	<a class="dropdown-item" href="#">Add New Task For Project</a>
                                  	<a class="dropdown-item" href="#">Add New Event For Project</a>
                                  	<a class="dropdown-item" href="#">Add Activity Set To Project</a>
								</div>
							</li>
                          
                        </ul>
                        
                      </div>
                    </div>
                   
                  </div>

                  <div class="card shadow p-2 due-dates">
                    <div class="row m-0">
                      <div class="col">
                        <span>Title</span>
                        <p></p>
                      </div>
                      <div class="col">
                        <span>Companies</span>
                        <p></p>
                      </div>
                      <div class="col">
                        <span>Phone</span>
                        <p>9876764875</p>
                      </div>
                      <div class="col">
                        <span>Email</span>
                        <p>johndoe@gmail.com</p>
                      </div>
                      <div class="col">
                        <span>Contact owner</span>
                        <p>John Doe</p>
                      </div>
                    </div>
                  </div>

                  <div class="modal-body project-pipeline">
                  	<div class="row pb-2">
	                    <div class="col">
	                        <span>Pipeline: Deal Pipeline</span>
	                    </div>
	                    <div class="col text-right">
	                        <span>Deal State: closed won</span>
	                    </div>
                    </div>
                  	<div class="row">
                  		<div class="pipeline-small flat pipeline-project p-2 w-100">
		                    <a class="won noselect tipped-top text-white w-25" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plan">&nbsp;<i class="fa fa-check" aria-hidden="true"></i><br><span>Plan</span>
		                        <span class="stretched-link" data-toggle="modal" data-target="#pipeline-stage" data-dismiss="modal"></span>
		                    </a>
		                    <a class="won noselect tipped-top bg-gray text-white w-12" data-toggle="tooltip" data-placement="top" title="" data-original-title="Design">&nbsp;<i class="fa fa-check" aria-hidden="true"></i><br><span>Design</span>
		                        <span class="stretched-link" data-toggle="modal" data-target="#pipeline-stage" data-dismiss="modal"></span>
		                    </a>
		                    <a class="won noselect tipped-top text-white w-25" data-toggle="tooltip" data-placement="top" title="" data-original-title="Develop">&nbsp;<i class="fa fa-check" aria-hidden="true"></i><br><span>Develop</span>
		                        <span class="stretched-link" data-toggle="modal" data-target="#pipeline-stage" data-dismiss="modal"></span>
		                    </a>
		                      
		                    <a class="won noselect tipped-top text-white padding w-25" data-toggle="tooltip" data-placement="top" title="" data-original-title="COmplete">&nbsp;Complete
		                        
		                    </a>
		                </div>
                  	</div>
                    <div class="task-infos pt-3">
						<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
							<li class="nav-item"><a class="nav-link active" href="#pipeline-task-details" data-toggle="tab">Details</a></li>
							<li class="nav-item"><a class="nav-link" href="#pipeline-task-related" data-toggle="tab">Related</a></li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane show active" id="pipeline-task-details">
								<div class="crms-tasks">
							  	<div class="tasks__item crms-task-item active">
							    	<div class="accordion-header js-accordion-header">Task Details</div> 
								  	<div class="accordion-body js-accordion-body">
									    <div class="accordion-body__contents">
										    <table class="table">
				                                <tbody>
				                                    <tr>
				                                      <td>Record ID</td>
				                                      <td>124192692</td>
				                                    </tr>
				                                    <tr>
				                                      <td>Task Name</td>
				                                      <td>1. Personalize your account</td>
				                                    </tr>
				                                    <tr>
				                                      <td>Assigned To</td>
				                                      <td>John Doe</td>
				                                    </tr>
				                                    <tr>
				                                      <td>Date Due</td>
				                                      <td>-</td>
				                                    </tr>
				                                </tbody>
				                            </table>
									    </div>
								    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Additional Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<table class="table">
			                                <tbody>
			                                    <tr>
			                                      <td>Start Date</td>
			                                      <td>-</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Reminder Date</td>
			                                      <td>-</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Repeats</td>
			                                      <td></td>
			                                    </tr>
			                                    <tr>
			                                      <td>Progress</td>
			                                      <td>0%</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Priorit</td>
			                                      <td>Medium</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Status</td>
			                                      <td>Not Started</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Last Updated</td>
			                                      <td>04-Jun-20</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Created</td>
			                                      <td>03-Jun-20 1:14 AM</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Task Created By</td>
			                                      <td>John Doe</td>
			                                    </tr>
			                                    <tr>
			                                      <td>Task Owner</td>
			                                      <td>John Doe</td>
			                                    </tr>
			                                </tbody>
			                            </table>
								    </div>
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Related To</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								        <table class="table">
			                                <tbody>
			                                    <tr>
			                                      <td>Related To</td>
			                                      <td>-</td>
			                                    </tr>
			                                </tbody>
		                                </table>
								    </div>
								    
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Description Information</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<table class="table">
		                                  	<tbody>
			                                    <tr>
			                                      <td>Description</td>
			                                      <td>-</td>
			                                    </tr>
		                                  	</tbody>
		                                </table>
								    </div>
								    
							    </div>
							  </div>
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Task Comments</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<button class="btn btn-secondary text-white w-25">Add Comments</button>
								    </div>
							    </div>
							  </div>
							 
							  <div class="tasks__item crms-task-item">
							    <div class="accordion-header js-accordion-header">Permissions</div> 
							  	<div class="accordion-body js-accordion-body">
								    <div class="accordion-body__contents">
								      	<table class="table">
		                                  	<tbody>
			                                    <tr>
			                                      <td>Task visibility</td>
			                                      <td>Private</td>
			                                    </tr>
		                                  	</tbody>
		                                </table>
								    </div>
								    
							    </div>
							  </div>
							</div>
							</div>
								
							<div class="tab-pane task-related" id="pipeline-task-related">
								<div class="row pt-3">
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Companies</h4>
		                                  <span>2</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-info card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Deals</h4>
		                                  <span>1</span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-success card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Projects</h4>
		                                  <span>1</span>
		                                </div>
		                              </div>
		                            </div>
		                        </div>
		                        <div class="row pt-3 pb-4">
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-success card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Contacts</h4>
		                                  <span></span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Notes</h4>
		                                  <span></span>
		                                </div>
		                              </div>
		                            </div>
		                            <div class="col-md-4">
		                              <div class="card bg-gradient-info card-img-holder text-white h-100">
		                                <div class="card-body">
		                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                  <h4 class="font-weight-normal mb-3">Files</h4>
		                                  <span>1</span>
		                                </div>
		                              </div>
		                            </div>
		                        </div>
		                        <div class="row">
		                        	<div class="crms-tasks  p-2">
			                        	<div class="tasks__item crms-task-item active">
										    <div class="accordion-header js-accordion-header">Companies <span class="badge badge-secondary float-right">0</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Deals <span class="badge badge-secondary float-right">0</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Projects <span class="badge badge-secondary float-right">0</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Contacts <span class="badge badge-secondary float-right">0</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Notes <span class="badge badge-secondary float-right">0</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    </div>
										    </div>
										</div>
										<div class="tasks__item crms-task-item">
										    <div class="accordion-header js-accordion-header">Files <span class="badge badge-secondary float-right">0</span></div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
											    </div>
										    </div>
										</div>
									</div>
		                        </div>
							</div>
						</div>
                   
                  </div>
                </div>

                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->

            <!-- cchange pipeline stage Modal -->
            <div class="modal" id="pipeline-stage">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Change Pipeline Stage</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                     <form>
                      <div class="form-group">
                  <label class="col-form-label">New Stage</label>
                    <select class="form-control" id="related-to">
                        <option>Plan</option>
                        <option>Design</option>
                        <option>Develop</option>
                        <option>Complete</option>
                     </select>
                  </div>
                     </form>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer text-center">
                    <button type="button" class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>&nbsp;&nbsp;
					<button type="button" class="btn btn-secondary btn-rounded cancel-button">Cancel</button>
                  </div>

                </div>
              </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crms-laravel\template\resources\views/page/activities.blade.php ENDPATH**/ ?>