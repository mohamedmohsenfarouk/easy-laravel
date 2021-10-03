
<?php $__env->startSection('content'); ?>		

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">

					<!-- Page Header -->
					<div class="crms-title row bg-white mb-4">
                		<div class="col  p-0">
                			<h3 class="page-title">
			                <span class="page-title-icon bg-gradient-primary text-white mr-2">
			                  <i class="la la-table"></i>
			                </span>Projects Kanban View</h3>
                		</div>
                		<div class="col p-0 text-right">
                			<ul class="breadcrumb bg-white float-right m-0 pl-0 pr-0">
								<li class="breadcrumb-item"><a href="index">Dashboard</a></li>
								<li class="breadcrumb-item active">Projects Kanban View</li>
							</ul>
                		</div>
                	</div>

                	<div class="page-header  mb-0 ">
						<div class="row">
							<div class="col">

								<div class="dropdown">
									<a class="dropdown-toggle recently-viewed" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> All Projects</a>
									<div class="dropdown-menu" x-placement="bottom-start">
										<a class="dropdown-item" href="#">Recently Viewed</a>
				                        <a class="dropdown-item" href="#">Items I'm following</a>
				                        <a class="dropdown-item" href="#">All Projects</a>
				                        <a class="dropdown-item" href="#">All Closed Deals</a>
				                        <a class="dropdown-item" href="#">All Open Deals</a>
									</div>
								</div>
							</div>
							<div class="col text-right">
								<ul class="list-inline-item pl-0">
									
					                <li class="dropdown list-inline-item add-lists">
										<a class="dropdown-toggle recently-viewed pr-2" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> 
											<div class="nav-profile-text">
					                          <i class="fa fa-cog" aria-hidden="true"></i>
					                        </div>
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#">Choose Columns</a>
					                        <a class="dropdown-item" href="#">Group Columns</a>
					                        <a class="dropdown-item" href="#">Sharing Settings</a>
					                        <a class="dropdown-item" href="#">Rename</a>
					                        <a class="dropdown-item" href="#">Clone</a>
					                        <a class="dropdown-item" href="#">Delete</a>
										</div>
									</li>
									<li class="dropdown list-inline-item add-lists">
										<a class="dropdown-toggle recently-viewed pr-2" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> 
											<div class="nav-profile-text">
					                          <i class="fa fa-th" aria-hidden="true"></i>
					                        </div>
										</a>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="projects">List View</a>
					                        <a class="dropdown-item" href="projects-kanban-view">Kanban View</a>
					                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add-new-list">Add New List View</a>
										</div>
									</li>
					                
					                <li class="list-inline-item">
					                    <button class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded" id="add-task" data-toggle="modal" data-target="#add_project">New Project</button>
					                </li>
					            </ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					 <div class="row m-0">
		              <div class="col-md-12 grid-margin stretch-card kanban">
		                <div class="">
		                  <div class="card-body p-0 row">
		                     <div id="sortableKanbanBoards" class="col-md-12 kanban-views p-0">
		                        <div class="panel panel-primary kanban-col m-0">
		                            <div class="panel-heading bg-transparent p-0">
		                                <h4>Not Contacted (1)</h4>
		                                <!-- <i class="fa fa-2x fa-plus-circle pull-right"></i> -->
		                            </div>
		                            <div class="panel-body slimScrollDiv">
		                                <div id="TODO" class="kanban-centered">

		                                    <article class="kanban-entry grab" id="item1" draggable="true">
		                                        <div class="kanban-entry-inner">
		                                            <div class="kanban-label card bg-gradient-danger card-img-holder text-white h-100" data-toggle="modal" data-target="#leads-details">
		                                            	<img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                                <h2 data-toggle="modal" data-target="#leads">Anne Lynch</h2>
		                                                
		                                                <ul class="list-unstyled">
		                                                  <li>VB of Sales</li>
		                                                  <li>Howwe-Blanda LLC</li>
		                                                </ul>
		                                            </div>
		                                        </div>
		                                    </article>

		                                    <article class="kanban-entry grab" id="item2" draggable="true">
		                                        <div class="kanban-entry-inner">
		                                            <div class="kanban-label card bg-gradient-info card-img-holder text-white h-100" data-toggle="modal" data-target="#leads-details">
		                                            	<img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                                <h2 data-toggle="modal" data-target="#leads">David Mathews</h2>
		                                               
		                                                <ul class="list-unstyled">
		                                                  <li>Finance Director</li>
		                                                  <li>Ebert and Sons</li>
		                                                </ul>
		                                            </div>
		                                        </div>
		                                    </article>

		                                    <article class="kanban-entry grab" id="item4" draggable="true">
		                                        <div class="kanban-entry-inner">
		                                            <div class="kanban-label card bg-gradient-success card-img-holder text-white h-100" data-toggle="modal" data-target="#leads-details">
		                                            	<img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                               <h2 data-toggle="modal" data-target="#leads">Douglas Baker</h2>
		                                               
		                                                <ul class="list-unstyled">
		                                                  <li>Finance Director</li>
		                                                  <li>Ebert and Sons</li>
		                                                </ul>
		                                            </div>
		                                        </div>
		                                    </article>

		                                </div>
		                            </div>
		                          
		                        </div>
		                        
		                       
		                        <div class="panel panel-primary kanban-col mr-0">
		                            <div class="panel-heading bg-transparent p-0">
		                                <h4>Attempted Contact (0)</h4>
		                                <!-- <i class="fa fa-2x fa-plus-circle pull-right"></i> -->
		                            </div>
		                            <div class="panel-body slimScrollDiv">
		                                <div id="DOING" class="kanban-centered">

		                                    <article class="kanban-entry grab" id="item5" draggable="true">
		                                        <div class="kanban-entry-inner">

		                                            <div class="kanban-label card bg-gradient-warning card-img-holder text-white h-100" data-toggle="modal" data-target="#leads-details">
		                                            	<img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                                <h2 data-toggle="modal" data-target="#leads">Douglas Baker</h2>
		                                               
		                                                <ul class="list-unstyled">
		                                                  <li>Finance Director</li>
		                                                  <li>Ebert and Sons</li>
		                                                </ul>
		                                            </div>
		                                        </div>
		                                    </article>

		                                    <article class="kanban-entry grab" id="item6" draggable="true">
		                                        <div class="kanban-entry-inner">
		                                            <div class="kanban-label card bg-gradient-danger card-img-holder text-white h-100" data-toggle="modal" data-target="#leads-details">
		                                            	<img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                                <h2 class="" data-toggle="modal" data-target="#leads">Douglas Baker</h2>
		                                                
		                                                  </li>
		                                                <ul class="list-unstyled">
		                                                  <li>Finance Director</li>
		                                                  <li>Ebert and Sons</li>
		                                                </ul>
		                                            </div>
		                                        </div>
		                                    </article>

		                                </div>
		                            </div>
		                          
		                        </div>
		                      
		                        <div class="panel panel-primary kanban-col mr-0">
		                            <div class="panel-heading bg-transparent p-0">
		                                <h4>Contact (2)</h4>
		                                <!-- <i class="fa fa-2x fa-plus-circle pull-right"></i> -->
		                            </div>
		                            <div class="panel-body slimScrollDiv">
		                                <div id="DONE" class="kanban-centered">

		                                    <article class="kanban-entry grab" id="item5" draggable="true">
		                                        <div class="kanban-entry-inner">

		                                            <div class="kanban-label card bg-gradient-info card-img-holder text-white h-100" data-toggle="modal" data-target="#leads-details">
		                                            	<img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                                <h2 data-toggle="modal" data-target="#leads">Douglas Baker</h2>
		                                                
		                                                <ul class="list-unstyled">
		                                                  <li>Finance Director</li>
		                                                  <li>Ebert and Sons</li>
		                                                </ul>
		                                            </div>
		                                        </div>
		                                    </article>

		                                    <article class="kanban-entry grab" id="item6" draggable="true">
		                                        <div class="kanban-entry-inner">
		                                            <div class="kanban-label card bg-gradient-success card-img-holder text-white h-100" data-toggle="modal" data-target="#leads-details">
		                                            	<img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                                <h2 data-toggle="modal" data-target="#leads">Douglas Baker</h2>
		                                                
		                                                <ul class="list-unstyled">
		                                                  <li>Finance Director</li>
		                                                  <li>Ebert and Sons</li>
		                                                </ul>
		                                            </div>
		                                        </div>
		                                    </article>

		                                </div>
		                            </div>
		                          
		                        </div>

		                         <div class="panel panel-primary kanban-col mr-0">
		                            <div class="panel-heading bg-secondary bg-transparent p-0">
		                                <h4 class="closed">Closed Lost (4)</h4>
		                                <!-- <i class="fa fa-2x fa-plus-circle pull-right"></i> -->
		                            </div>
		                            <div class="panel-body slimScrollDiv">
		                                <div id="closed" class="kanban-centered">

		                                    <article class="kanban-entry grab" id="item7" draggable="true">
		                                        <div class="kanban-entry-inner">

		                                            <div class="kanban-label card bg-gradient-warning card-img-holder text-white h-100" data-toggle="modal" data-target="#leads-details">
		                                            	<img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
		                                                <h2 data-toggle="modal" data-target="#leads">Douglas Baker</h2>
		                                                
		                                                <ul class="list-unstyled">
		                                                  <li>Finance Director</li>
		                                                  <li>Ebert and Sons</li>
		                                                </ul>
		                                            </div>
		                                        </div>
		                                    </article>

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
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->

		<!--modal section starts here-->
		<div class="modal fade" id="add-new-list">
          <div class="modal-dialog">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Add New List View</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body">
                <form class="forms-sample">
                  <div class="form-group row">
                    <label for="view-name" class="col-sm-4 col-form-label">New View Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="view-name" placeholder="New View Name">
                    </div>
                  </div>
                  <div class="form-group row pt-4">
                    <label class="col-sm-4 col-form-label">Sharing Settings</label>
                    <div class="col-sm-8">
                      <div class="form-group">
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value=""> Just For Me <i class="input-helper"></i></label>
                        </div><br />
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked=""> Share Filter with Everyone <i class="input-helper"></i></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="text-center">
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </div>
                </form>
              </div>
           
            </div>
          </div>
        </div>


		<!-- Add project Modal -->
			<div class="modal right fade" id="add_project" tabindex="-1" role="dialog" aria-modal="true">
				<div class="modal-dialog" role="document">
					<button type="button" class="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-content">

						<div class="modal-header">
		                    <h4 class="modal-title text-center">Add Project</h4>
		                    <button type="button" class="close xs-close" data-dismiss="modal">×</button>
		                  </div>

						<div class="modal-body">
							<div class="row">
						        <div class="col-md-12">
						            <form>
						            	<h4>Project Details</h4>
						            	<div class="form-group row">
				                            <div class="col-md-6">
				                            	<label class="col-form-label">Project Name <span class="text-danger">*</span></label>
                            					<input class="form-control" type="text" name="deal-name">
				                            </div>
				                            <div class="col-md-6">
				                            	<label class="col-form-label">Status</label>
					                            <select class="form-control">
					                                <option>In progress</option>
					                                <option>Deferred</option>
					                                <option>Cancelled</option>
					                                <option>Abandoned</option>
					                                <option>Completed</option>
					                             </select>
				                            </div>
				                        </div>
				                        <div class="form-group row">
				                            <div class="col-md-6">
				                            	<label class="col-form-label">Category</label>
					                            <select class="form-control">
					                                <option>Email</option>
					                                <option>Follow up</option>
					                                <option>Get Started</option>
					                                <option>Meeting</option>
					                                <option>Phone call</option>
					                             </select>
				                            </div>
				                            <div class="col-md-6">
				                            	<label class="col-form-label">User Responsible</label>
					                            <select class="form-control">
					                                <option>Nothing selected</option>
					                                <option>ohn Doe</option> 
					                            </select>
				                            </div>
				                        </div>
				                        <h4>Pipeline and Stage</h4>
						                <div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Pipeline</label>
					                            <select class="form-control">
					                                <option>Nothing selected </option>
					                                <option>Project Pipeline </option>
					                            </select>
											</div>
											<div class="col-sm-6">
												<label class="col-form-label">Stage</label>
					                            <select class="form-control">
					                                <option>Nothing selected </option>
					                            </select>
											</div>
										</div>
										
										<h4>Description Information</h4>
										<div class="form-group row">
											<div class="col-sm-12">
												<label class="col-form-label">Description </label>
				                            	<textarea class="form-control" rows="3" id="description" placeholder="Description"></textarea>
											</div>
										</div>
										<h4>Tag Information</h4>
										<div class="form-group row">
											<div class="col-sm-12">
												<label class="col-form-label">Tag List</label>
                            					<input type="text" class="form-control" name="tag-name" placeholder="Tag List">
											</div>
										</div>
										
										<h4>Permissions</h4>
										<div class="form-group row">
											<div class="col-sm-6">
												<label class="col-form-label">Visibility</label>
					                            <select class="form-control">
					                                <option>Everyone</option>
					                                <option>Select a team</option>
					                             </select>
											</div>
											
										</div>
						                <div class="text-center py-3">
						                	<button type="button" class="border-0 btn btn-primary btn-gradient-primary btn-rounded">Save</button>&nbsp;&nbsp;
						                	<button type="button" class="btn btn-secondary btn-rounded">Cancel</button>
						                </div>
						            </form>
						        </div>
							</div>

						</div>

					</div><!-- modal-content -->
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			<!--system users Modal -->
            <div class="modal right fade" id="leads-details" tabindex="-1" role="dialog" aria-modal="true">
              <div class="modal-dialog" role="document">
                <button type="button" class="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close xs-close" data-dismiss="modal">×</button>
                    <div class="row w-100">
                      <div class="col-md-7 account">
                        <p class="User-name">Lead</p>
                        <span><img src="assets/img/system-user.png" alt="User" class="user-image" /></span>
                        <span class="modal-title">Anne Lynch</span>&nbsp;
                        <span class="rating-star"><i class="fa fa-star" aria-hidden="true"></i></span>&nbsp;
                        <span class="lock"><i class="fa fa-lock" aria-hidden="true"></i></span>
                      </div>
                      <div class="col-md-5 text-right">
                        <ul class="list-unstyled list-style-none">
							<li class="dropdown list-inline-item"><br />
								<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> Actions </a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="#">Edit This Lead</a>
                                  	<a class="dropdown-item" href="#">Change Lead Image</a>
                                  	<a class="dropdown-item" href="#">Delete This Lead</a>
                                  	<a class="dropdown-item" href="#">Email This Lead</a>
                                  	<a class="dropdown-item" href="#">Clone This Lead</a>
                                  	<a class="dropdown-item" href="#">Change Record Owner</a>
                                  	<a class="dropdown-item" href="#">Generate Merge Document</a>
                                  	<a class="dropdown-item" href="#">Change Lead to Contact</a>
                                  	<a class="dropdown-item" href="#">Convert Lead</a>
                                  	<a class="dropdown-item" href="#">Print This Lead</a>
                                  	<a class="dropdown-item" href="#">Merge Into Lead</a>
                                  	<a class="dropdown-item" href="#">SmartMerge Lead</a>
                                  	<a class="dropdown-item" href="#">Add Activity Set To Lead</a>
                                  	<a class="dropdown-item" href="#">Add New Event For Lead</a>
								</div>
							</li>
                        </ul>
                      </div>
                    </div>
                   
                  </div>

                  <div class="card shadow p-2 due-dates">
                    <div class="row m-0">
                      <div class="col">
                        <span>Lead Status</span>
                        <p>Not Contacted</p>
                      </div>
                      <div class="col">
                        <span>Name</span>
                        <p>Anne Lynch</p>
                      </div>
                      <div class="col">
                        <span>Lead Source</span>
                        <p>Phone Enquiry</p>
                      </div>
                      <div class="col">
                        <span>Lead Rating</span>
                        <p>0</p>
                      </div>
                      <div class="col">
                        <span>Lead owner</span>
                        <p>John Doe</p>
                      </div>
                    </div>
                  </div>

                <div class="row pt-3">
                  	<div class="col-md-12">
                  		<ul class="cd-breadcrumb triangle nav nav-tabs w-100 pl-2 crms-steps" role="tablist">
						    <li role="presentation">
						        <a href="#not-contacted" class="active" aria-controls="not-contacted" role="tab" data-toggle="tab" aria-expanded="true">
						              <span class="octicon octicon-light-bulb"></span>Not Contacted
						         </a>
						    </li>
						    <li role="presentation" class="">
						        <a href="#attempted-contact" aria-controls="attempted-contact" role="tab" data-toggle="tab" aria-expanded="false">
						            <span class="octicon octicon-diff-added"></span>Attempted Contact
						        </a>
						    </li>
						    <li role="presentation" class="">
						        <a href="#contact" aria-controls="contact" role="tab" data-toggle="tab" aria-expanded="false">
						            <span class="octicon octicon-comment-discussion"></span>Contact
						        </a>
						    </li>
						    <li role="presentation" class="">
						        <a href="#converted" aria-controls="contact" role="tab" data-toggle="tab" aria-expanded="false">
						            <span class="octicon octicon-comment-discussion"></span>Converted
						        </a>
						    </li>
						    <li role="presentation" class="d-none">
						        <a href="#converted" aria-controls="converted" role="tab" data-toggle="tab" aria-expanded="false">
						            <span class="octicon octicon-verified"></span>Converted
						       	</a>
						    </li>
					   
						</ul>
                  	</div>
                </div>

                <div class="tab-content pipeline-tabs">
			        <div role="tabpanel" class="tab-pane active" id="not-contacted">
			             <div class="modal-body">
		                    <div class="task-infos">
								<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
									<li class="nav-item"><a class="nav-link active" href="#not-contact-task-details" data-toggle="tab">Details</a></li>
									<li class="nav-item"><a class="nav-link" href="#not-contact-task-related" data-toggle="tab">Related</a></li>
									<li class="nav-item"><a class="nav-link" href="#not-contact-task-activity" data-toggle="tab">Activity</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane show active" id="not-contact-task-details">
										<div class="crms-tasks">
									  	<div class="tasks__item crms-task-item active">
									    	<div class="accordion-header js-accordion-header">Lead Information</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
												    <table class="table">
						                                <tbody>
						                                  <tr>
						                                    <td>Record ID</td>
						                                    <td>124192692</td>
						                                  </tr>
						                                  <tr>
						                                    <td>Name</td>
						                                    <td>Anny Lench</td>
						                                  </tr>
						                                  <tr>
						                                    <td>Title</td>
						                                    <td>VP of Sales</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Organization</td>
						                                  	<td>Howe-Blanda LLC</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Status</td>
						                                  	<td>OPEN - NotContacted</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>User Responsible</td>
						                                  	<td>-</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Link Email Address</td>
						                                  	<td>abc@gmail.com</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Owner</td>
						                                  	<td>John Doe</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Created</td>
						                                  	<td>03-Jun-20 1:14 AM</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Date of Last Activity</td>
						                                  	<td>-</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Date of Next Activity</td>
						                                  	<td>-</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Rating</td>
						                                  	<td>0</td>
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
					                                    <td>Email Address</td>
					                                    <td>abc@gmail.com</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Email Opted Out</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Phone</td>
					                                    <td>(406) 653-3860</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Mobile Phone</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Fax</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Website</td>
					                                    <td></td>
					                                  </tr>
					                                  <tr>
					                                    <td>Industry</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                  	<td>Number of Employees</td>
					                                  	<td>2</td>
					                                  </tr>
					                                  <tr>
					                                  	<td>Lead Source</td>
					                                  	<td>Phone Enquiry</td>
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
						                                    <td> Address</td>
						                                    <td>1000 Escalon Street, Palo Alto, CA, 94020, United States map</td>
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
					                                    <td>Interested in model: Whirlygig T950 </td>
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
									  <div class="tasks__item crms-task-item">
									    <div class="accordion-header js-accordion-header">Lead Conversion Information</div> 
									  	<div class="accordion-body js-accordion-body">
										    <div class="accordion-body__contents">
											    <table class="table">
					                                <tbody>
						                                <tr>
						                                    <td>Converted Contact</td>
						                                    <td>-</td>
						                                </tr>
						                                <tr>
						                                    <td>Converted Organization</td>
						                                    <td>-</td>
						                                </tr>
						                                <tr>
						                                    <td>Converted Opportunity</td>
						                                    <td>-</td>
						                                </tr>
					                                </tbody>
					                            </table>
										    </div>
										    
									    </div>
									  </div>
									</div>
									</div>
										
									<div class="tab-pane task-related" id="not-contact-task-related">
				                        <div class="row pt-3 pb-4">
				                            
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
												<div class="tasks__item crms-task-item">
												    <div class="accordion-header js-accordion-header">Notes <span class="badge badge-secondary float-right">2</span></div> 
												  	<div class="accordion-body js-accordion-body">
													    <div class="accordion-body__contents">
													    	<div class="table-responsive">
																<table class="table table-striped table-nowrap custom-table mb-0 datatable">
																	<thead>
																		<tr>
																			<th>Note Title</th>
																			<th>Date Created</th>
																			<th>Created By</th>
																			<th class="text-right">Actions</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			
																			<td>
																				Whirligig
																			</td>
																			<td>13-Jul-20 11:37 PM	</td>
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
																				Vb of sales
																			</td>
																			<td>13-Jul-20 11:37 PM	</td>
																			<td>John Smith</td>
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
									<div class="tab-pane" id="not-contact-task-activity">
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
				                              <div class="card bg-gradient-success card-img-holder text-white h-100">
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
												    <div class="accordion-header js-accordion-header">Upcoming Activity <span class="badge badge-secondary float-right">2</span></div> 
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

												                            <td class="text-right">
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
																			
												                            <td class="text-right">
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
												    <div class="accordion-header js-accordion-header">Past Activity <span class="badge badge-secondary float-right">1</span></div> 
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

												                            <td class="text-right">
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
								</div>
		                   
		                  </div>
		                </div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="attempted-contact">
			            <div class="modal-body">
		                    <div class="task-infos">
								<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
									<li class="nav-item"><a class="nav-link active" href="#attempted-task-details" data-toggle="tab">Details</a></li>
									<li class="nav-item"><a class="nav-link" href="#attempted-task-related" data-toggle="tab">Related</a></li>
									<li class="nav-item"><a class="nav-link" href="#attempted-task-activity" data-toggle="tab">Activity</a></li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane show active" id="attempted-task-details">
										<div class="crms-tasks">
									  	<div class="tasks__item crms-task-item active">
									    	<div class="accordion-header js-accordion-header">Lead Information</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
												    <table class="table">
						                                <tbody>
						                                  <tr>
						                                    <td>Record ID</td>
						                                    <td>124192692</td>
						                                  </tr>
						                                  <tr>
						                                    <td>Name</td>
						                                    <td>Anny Lench</td>
						                                  </tr>
						                                  <tr>
						                                    <td>Title</td>
						                                    <td>VP of Sales</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Organization</td>
						                                  	<td>Howe-Blanda LLC</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Status</td>
						                                  	<td>OPEN - NotContacted</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>User Responsible</td>
						                                  	<td>-</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Link Email Address</td>
						                                  	<td>abc@gmail.com</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Owner</td>
						                                  	<td>John Doe</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Created</td>
						                                  	<td>03-Jun-20 1:14 AM</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Date of Last Activity</td>
						                                  	<td>-</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Date of Next Activity</td>
						                                  	<td>-</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Rating</td>
						                                  	<td>0</td>
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
					                                    <td>Email Address</td>
					                                    <td>abc@gmail.com</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Email Opted Out</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Phone</td>
					                                    <td>(406) 653-3860</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Mobile Phone</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Fax</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Website</td>
					                                    <td></td>
					                                  </tr>
					                                  <tr>
					                                    <td>Industry</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                  	<td>Number of Employees</td>
					                                  	<td>2</td>
					                                  </tr>
					                                  <tr>
					                                  	<td>Lead Source</td>
					                                  	<td>Phone Enquiry</td>
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
						                                    <td> Address</td>
						                                    <td>1000 Escalon Street, Palo Alto, CA, 94020, United States map</td>
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
					                                    <td>Interested in model: Whirlygig T950 </td>
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
									  <div class="tasks__item crms-task-item">
									    <div class="accordion-header js-accordion-header">Lead Conversion Information</div> 
									  	<div class="accordion-body js-accordion-body">
										    <div class="accordion-body__contents">
											    <table class="table">
					                                <tbody>
						                                <tr>
						                                    <td>Converted Contact</td>
						                                    <td>-</td>
						                                </tr>
						                                <tr>
						                                    <td>Converted Organization</td>
						                                    <td>-</td>
						                                </tr>
						                                <tr>
						                                    <td>Converted Opportunity</td>
						                                    <td>-</td>
						                                </tr>
					                                </tbody>
					                            </table>
										    </div>
										    
									    </div>
									  </div>
									</div>
									</div>
										
									<div class="tab-pane task-related" id="attempted-task-related">
				                        <div class="row pt-3 pb-4">
				                            
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
									<div class="tab-pane" id="attempted-task-activity">
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
				                              <div class="card bg-gradient-success card-img-holder text-white h-100">
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
												    <div class="accordion-header js-accordion-header">Upcoming Activity <span class="badge badge-secondary float-right">2</span></div> 
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

												                            <td class="text-right">
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
																			
												                            <td class="text-right">
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
												    <div class="accordion-header js-accordion-header">Past Activity <span class="badge badge-secondary float-right">1</span></div> 
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

												                            <td class="text-right">
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
								</div>
		                   
		                  </div>
		                </div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="contact">
			            <div class="modal-body">
		                    <div class="task-infos">
								<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
									<li class="nav-item"><a class="nav-link active" href="#contact-task-details" data-toggle="tab">Details</a></li>
									<li class="nav-item"><a class="nav-link" href="#contact-task-related" data-toggle="tab">Related</a></li>
									<li class="nav-item"><a class="nav-link" href="#contact-task-activity" data-toggle="tab">Activity</a></li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane show active" id="contact-task-details">
										<div class="crms-tasks">
									  	<div class="tasks__item crms-task-item active">
									    	<div class="accordion-header js-accordion-header">Lead Information</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
												    <table class="table">
						                                <tbody>
						                                  <tr>
						                                    <td>Record ID</td>
						                                    <td>124192692</td>
						                                  </tr>
						                                  <tr>
						                                    <td>Name</td>
						                                    <td>Anny Lench</td>
						                                  </tr>
						                                  <tr>
						                                    <td>Title</td>
						                                    <td>VP of Sales</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Organization</td>
						                                  	<td>Howe-Blanda LLC</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Status</td>
						                                  	<td>OPEN - NotContacted</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>User Responsible</td>
						                                  	<td>-</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Link Email Address</td>
						                                  	<td>abc@gmail.com</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Owner</td>
						                                  	<td>John Doe</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Created</td>
						                                  	<td>03-Jun-20 1:14 AM</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Date of Last Activity</td>
						                                  	<td>-</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Date of Next Activity</td>
						                                  	<td>-</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Rating</td>
						                                  	<td>0</td>
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
					                                    <td>Email Address</td>
					                                    <td>abc@gmail.com</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Email Opted Out</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Phone</td>
					                                    <td>(406) 653-3860</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Mobile Phone</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Fax</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Website</td>
					                                    <td></td>
					                                  </tr>
					                                  <tr>
					                                    <td>Industry</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                  	<td>Number of Employees</td>
					                                  	<td>2</td>
					                                  </tr>
					                                  <tr>
					                                  	<td>Lead Source</td>
					                                  	<td>Phone Enquiry</td>
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
						                                    <td> Address</td>
						                                    <td>1000 Escalon Street, Palo Alto, CA, 94020, United States map</td>
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
					                                    <td>Interested in model: Whirlygig T950 </td>
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
									  <div class="tasks__item crms-task-item">
									    <div class="accordion-header js-accordion-header">Lead Conversion Information</div> 
									  	<div class="accordion-body js-accordion-body">
										    <div class="accordion-body__contents">
											    <table class="table">
					                                <tbody>
						                                <tr>
						                                    <td>Converted Contact</td>
						                                    <td>-</td>
						                                </tr>
						                                <tr>
						                                    <td>Converted Organization</td>
						                                    <td>-</td>
						                                </tr>
						                                <tr>
						                                    <td>Converted Opportunity</td>
						                                    <td>-</td>
						                                </tr>
					                                </tbody>
					                            </table>
										    </div>
										    
									    </div>
									  </div>
									</div>
									</div>
										
									<div class="tab-pane task-related" id="contact-task-related">
				                        <div class="row pt-3 pb-4">
				                            
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
									<div class="tab-pane" id="contact-task-activity">
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
				                              <div class="card bg-gradient-success card-img-holder text-white h-100">
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
												    <div class="accordion-header js-accordion-header">Upcoming Activity <span class="badge badge-secondary float-right">2</span></div> 
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

												                            <td class="text-right">
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
																			
												                            <td class="text-right">
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
												    <div class="accordion-header js-accordion-header">Past Activity <span class="badge badge-secondary float-right">1</span></div> 
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

												                            <td class="text-right">
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
								</div>
		                   
		                  </div>
		                </div>
			        </div>
			        <div role="tabpanel" class="tab-pane" id="converted">
			            <div class="modal-body">
		                    <div class="task-infos">
								<ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
									<li class="nav-item"><a class="nav-link active" href="#converted-task-details" data-toggle="tab">Details</a></li>
									<li class="nav-item"><a class="nav-link" href="#converted-task-related" data-toggle="tab">Related</a></li>
									<li class="nav-item"><a class="nav-link" href="#converted-task-activity" data-toggle="tab">Activity</a></li>
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane show active" id="converted-task-details">
										<div class="crms-tasks">
									  	<div class="tasks__item crms-task-item active">
									    	<div class="accordion-header js-accordion-header">Lead Information</div> 
										  	<div class="accordion-body js-accordion-body">
											    <div class="accordion-body__contents">
												    <table class="table">
						                                <tbody>
						                                  <tr>
						                                    <td>Record ID</td>
						                                    <td>124192692</td>
						                                  </tr>
						                                  <tr>
						                                    <td>Name</td>
						                                    <td>Anny Lench</td>
						                                  </tr>
						                                  <tr>
						                                    <td>Title</td>
						                                    <td>VP of Sales</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Organization</td>
						                                  	<td>Howe-Blanda LLC</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Status</td>
						                                  	<td>OPEN - NotContacted</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>User Responsible</td>
						                                  	<td>-</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Link Email Address</td>
						                                  	<td>abc@gmail.com</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Owner</td>
						                                  	<td>John Doe</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Created</td>
						                                  	<td>03-Jun-20 1:14 AM</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Date of Last Activity</td>
						                                  	<td>-</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Date of Next Activity</td>
						                                  	<td>-</td>
						                                  </tr>
						                                  <tr>
						                                  	<td>Lead Rating</td>
						                                  	<td>0</td>
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
					                                    <td>Email Address</td>
					                                    <td>abc@gmail.com</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Email Opted Out</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Phone</td>
					                                    <td>(406) 653-3860</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Mobile Phone</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Fax</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                    <td>Website</td>
					                                    <td></td>
					                                  </tr>
					                                  <tr>
					                                    <td>Industry</td>
					                                    <td>-</td>
					                                  </tr>
					                                  <tr>
					                                  	<td>Number of Employees</td>
					                                  	<td>2</td>
					                                  </tr>
					                                  <tr>
					                                  	<td>Lead Source</td>
					                                  	<td>Phone Enquiry</td>
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
						                                    <td> Address</td>
						                                    <td>1000 Escalon Street, Palo Alto, CA, 94020, United States map</td>
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
					                                    <td>Interested in model: Whirlygig T950 </td>
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
									  <div class="tasks__item crms-task-item">
									    <div class="accordion-header js-accordion-header">Lead Conversion Information</div> 
									  	<div class="accordion-body js-accordion-body">
										    <div class="accordion-body__contents">
											    <table class="table">
					                                <tbody>
						                                <tr>
						                                    <td>Converted Contact</td>
						                                    <td>-</td>
						                                </tr>
						                                <tr>
						                                    <td>Converted Organization</td>
						                                    <td>-</td>
						                                </tr>
						                                <tr>
						                                    <td>Converted Opportunity</td>
						                                    <td>-</td>
						                                </tr>
					                                </tbody>
					                            </table>
										    </div>
										    
									    </div>
									  </div>
									</div>
									</div>
										
									<div class="tab-pane task-related" id="converted-task-related">
				                        <div class="row pt-3 pb-4">
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
									<div class="tab-pane" id="converted-task-activity">
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
				                              <div class="card bg-gradient-success card-img-holder text-white h-100">
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
												    <div class="accordion-header js-accordion-header">Upcoming Activity <span class="badge badge-secondary float-right">2</span></div> 
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

												                            <td class="text-right">
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
																			
												                            <td class="text-right">
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
												    <div class="accordion-header js-accordion-header">Past Activity <span class="badge badge-secondary float-right">1</span></div> 
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

												                            <td class="text-right">
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
								</div>
		                   
		                  </div>
		                </div>
			        </div>
			       
			    </div>

                </div><!-- modal-content -->
              </div><!-- modal-dialog -->
            </div><!-- modal -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crms-laravel\template\resources\views/projects-kanban-view.blade.php ENDPATH**/ ?>