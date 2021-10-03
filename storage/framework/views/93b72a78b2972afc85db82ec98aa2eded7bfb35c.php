
<?php $__env->startSection('content'); ?>		
<!-- Page Wrapper -->
<div class="page-wrapper">
			
            <!-- Page Content -->
            <div class="content container-fluid">

                <div class="crms-title row bg-white">
                    <div class="col">
                        <h3 class="page-title m-0">
                        <span class="page-title-icon bg-gradient-primary text-white mr-2">
                          <i class="feather-user"></i>
                        </span> Leads </h3>
                    </div>
                    <div class="col text-right">
                        <ul class="breadcrumb bg-white float-right m-0 pl-0 pr-0">
                            <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Leads</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Page Header -->
                <div class="page-header pt-3 mb-0 ">
                    <div class="row">
                        <div class="col">

                            <div class="dropdown">
                                <a class="dropdown-toggle recently-viewed" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> All Leads</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Recently Viewed</a>
                                    <a class="dropdown-item" href="#">Items I'm following</a>
                                    <a class="dropdown-item" href="#">All Leads</a>
                                    <a class="dropdown-item" href="#">All Closed Leads</a>
                                    <a class="dropdown-item" href="#">All Open Leads</a>
                                    <a class="dropdown-item" href="#">Converted Leads</a>
                                    <a class="dropdown-item" href="#">My Open Leads</a>
                                    <a class="dropdown-item" href="#">Todays Leads</a>
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
                                        <a class="dropdown-item" href="leads">List View</a>
                                        <a class="dropdown-item" href="leads-kanban-view">Kanban View</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add-new-list">Add New List View</a>
                                    </div>
                                </li>
                                
                                <li class="list-inline-item">
                                    <button class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded" id="add-task" data-toggle="modal" data-target="#add_lead">New Lead</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                
                <!-- Content Starts -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-nowrap custom-table mb-0 datatable">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>Full Name</th>
                                                <th>Title</th>
                                                <th>Company</th>
                                                <th>Phone</th>
                                                <th>Email Address</th>
                                                <th>Lead Status</th>
                                                <th>Lead Created</th>
                                                <th>Lead Owner</th>
                                                <th></th>
                                                <th class="text-right">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="checkBox">
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#"><span class="person-circle-a person-circle">A</span></a>
                                                    <a href="#" data-toggle="modal" data-target="#leads-details">Anne Lynch</a>
                                                </td>
                                                <td>VP of Sales	</td>
                                                <td>
                                                     Umbrella		
                                                </td>
                                                <td>(406) 653-3860</td>
                                                <td>abc@gmail.com</td>
                                                <td>OPEN - NotContacted	</td>
                                                <td>03-Jun-20 1:14 AM</td>
                                                <td>John Doe</td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
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
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="checkBox">
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#"><span class="person-circle-b person-circle">B</span></a>
                                                    <a href="#" data-toggle="modal" data-target="#leads-details">Benneth</a>
                                                </td>
                                                <td>VP of Sales	</td>
                                                <td>
                                                    Acme Corporation		
                                                </td>
                                                <td>(406) 653-3860</td>
                                                <td>abc@gmail.com</td>
                                                <td>OPEN - NotContacted	</td>
                                                <td>03-Jun-20 1:14 AM</td>
                                                <td>John Doe</td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
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
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="checkBox">
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#"><span class="person-circle-c person-circle">C</span></a>
                                                    <a href="#" data-toggle="modal" data-target="#leads-details">Cravo</a>
                                                </td>
                                                <td>VP of Sales	</td>
                                                <td>
                                                    Acme Corporation	
                                                </td>
                                                <td>(406) 653-3860</td>
                                                <td>abc@gmail.com</td>
                                                <td>OPEN - NotContacted	</td>
                                                <td>03-Jun-20 1:14 AM</td>
                                                <td>John Doe</td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
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
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="checkBox">
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#"><span class="person-circle-c person-circle">C</span></a>
                                                    <a href="#" data-toggle="modal" data-target="#leads-details">Cravo</a>
                                                </td>
                                                <td>VP of Sales	</td>
                                                <td>
                                                     Soylent Corp	
                                                </td>
                                                <td>(406) 653-3860</td>
                                                <td>abc@gmail.com</td>
                                                <td>OPEN - Contacted	</td>
                                                <td>03-Jun-20 1:14 AM</td>
                                                <td>John Doe</td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
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
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="checkBox">
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#"><span class="person-circle-d person-circle">D</span></a>
                                                    <a href="#" data-toggle="modal" data-target="#leads-details">Des Ignayshun</a>
                                                </td>
                                                <td>VP of Sales	</td>
                                                <td>
                                                    Howe-Blanda LLC		
                                                </td>
                                                <td>(406) 653-3860</td>
                                                <td>abc@gmail.com</td>
                                                <td>OPEN - Contacted	</td>
                                                <td>03-Jun-20 1:14 AM</td>
                                                <td>John Doe</td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
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
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="checkBox">
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#"><span class="person-circle-j person-circle">J</span></a>
                                                    <a href="#" data-toggle="modal" data-target="#leads-details">Jen Tile</a>
                                                </td>
                                                <td>VP of Sales	</td>
                                                <td>
                                                    Howe-Blanda LLC		
                                                </td>
                                                <td>(406) 653-3860</td>
                                                <td>abc@gmail.com</td>
                                                <td>OPEN - NotContacted	</td>
                                                <td>03-Jun-20 1:14 AM</td>
                                                <td>John Doe</td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
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
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="checkBox">
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="#"><span class="person-circle-j person-circle">J</span></a>
                                                    <a href="#" data-toggle="modal" data-target="#leads-details">Jacob</a>
                                                </td>
                                                <td>Sales	</td>
                                                <td>
                                                    Blanda		
                                                </td>
                                                <td>(406) 653-3860</td>
                                                <td>abc@gmail.com</td>
                                                <td>OPEN - Contacted</td>
                                                <td>08-May-19 1:14 AM</td>
                                                <td>Anderson</td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
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

    <!-- Modal -->
        <div class="modal right fade" id="add_lead" tabindex="-1" role="dialog" aria-modal="true">
            <div class="modal-dialog" role="document">
                <button type="button" class="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title text-center">Add Lead</h4>
                        <button type="button" class="close xs-close" data-dismiss="modal">×</button>
                      </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                    <h4>Lead Information</h4>
                                    <div class="form-group row">
                                        <div class="col-md-12"><label class="col-form-label">Name <span class="text-danger">*</span></label></div>
                                        <div class="col-md-4">
                                            <input class="form-control" type="text" placeholder="Prefix" name="prefix">
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-control" type="text" placeholder="First name" name="prefix-name">
                                        </div>
                                        <div class="col-md-4">
                                            <input class="form-control" type="text" placeholder="Last name" name="last-name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Organization</label>
                                            <select class="form-control">
                                                <option>Select</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Title</label>
                                            <input type="text" class="form-control"  name="title" placeholder="Title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Lead Status</label>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>Open - Contacted</option>
                                                <option>Open - Not Contacted</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="col-form-label">User Responsible</label>
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>John Doe</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Lead Rating</label>
                                            <input type="number" class="form-control" name="rating" placeholder="Rating">
                                        </div>
                                        
                                    </div>
                                    <h4>Additional Information</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Email</label>
                                            <input type="text" class="form-control"  name="email" placeholder="Email">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Email Opted out</label>
                                            <div >
                                              <label class="container-checkbox">
                                                  <input type="checkbox">
                                                  <span class="checkmark"></span>
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Phone</label>
                                            <input type="text" class="form-control" name="phone" placeholder="Phone">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Mobile Phone</label>
                                            <input type="text" class="form-control" name="m-phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Fax</label>
                                            <input type="text" class="form-control" name="fax" placeholder="Fax">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Website</label>
                                            <input type="text" class="form-control"  name="website" placeholder="Website">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Industry</label>
                                            <input type="text" class="form-control" name="assistant-phone" placeholder="Industry">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Number of Employees</label>
                                            <input type="text" class="form-control"  name="employees" placeholder="Number of Employees">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Lead Source</label>
                                            <select class="form-control">
                                                <option>Web</option>
                                                <option>Phone Enquiry</option>
                                                <option>Partner Referral</option>
                                                <option>Purchased List</option>
                                                <option>Other</option>
                                             </select>
                                        </div>
                                        
                                    </div>
                                    
                                    <h4>Address Information</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <label class="col-form-label">Mailing Address</label>
                                            <textarea class="form-control" rows="3" name="address" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="City" name="city">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="State/Provience" name="state">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Postal Code" name="postal">
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control">
                                                <option>India</option>
                                                <option>US</option>
                                                <option>Japan</option>
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
                                            <label class="col-form-label">Permission</label>
                                            <select class="form-control">
                                                <option>Task Visibility</option>
                                                <option>Private Task</option>
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
                      <div class="col-md-7 account d-flex">
                          <div class="company_img">
                              <img src="assets/img/system-user.png" alt="User" class="user-image" class="img-fluid" />
                          </div>
                          <div>
                              <p class="mb-0">System User</p>
                              <span class="modal-title">John Doe</span>
                            <span class="rating-star"><i class="fa fa-star" aria-hidden="true"></i></span>
                            <span class="lock"><i class="fa fa-lock" aria-hidden="true"></i></span>
                          </div>

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

              <div class="card due-dates">
                  <div class="card-body">
                    <div class="row">
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
              </div>
             

              <div class="modal-body">
                <div class="row">
                      <div class="col-md-12">
                          <ul class="cd-breadcrumb triangle nav nav-tabs w-100 crms-steps" role="tablist">
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

                <div class="tab-content pipeline-tabs border-0">
                    <div role="tabpanel" class="tab-pane active p-0" id="not-contacted">
                         <div class="">
                            <div class="task-infos">
                                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                                    <li class="nav-item"><a class="nav-link active" href="#not-contact-task-details" data-toggle="tab">Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#not-contact-task-related" data-toggle="tab">Related</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#not-contact-task-activity" data-toggle="tab">Activity</a></li>
                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active p-0" id="not-contact-task-details">
                                        <div class="crms-tasks">
                                          <div class="tasks__item crms-task-item active">
                                            <div class="accordion-header js-accordion-header">Lead Information</div> 
                                              <div class="accordion-body js-accordion-body">
                                                <div class="accordion-body__contents">
                                                    <table class="table">
                                                        <tbody>
                                                          <tr>
                                                            <td class="border-0">Record ID</td>
                                                            <td class="border-0">124192692</td>
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
                                                              <td>Williams</td>
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
                                                              <td>09/01/2020</td>
                                                          </tr>
                                                          <tr>
                                                              <td>Date of Next Activity</td>
                                                              <td>09/01/2021</td>
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
                                                        <td>Lorem</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Phone</td>
                                                        <td>(406) 653-3860</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Mobile Phone</td>
                                                        <td>9865665545</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Fax</td>
                                                        <td>1234</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Website</td>
                                                        <td>abc.com</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Industry</td>
                                                        <td>Information Security</td>
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
                                                            <td>John</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Converted Organization</td>
                                                            <td>Umbrella</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Converted Opportunity</td>
                                                            <td>Lorem ipsum</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                        
                                    <div class="tab-pane task-related p-0" id="not-contact-task-related">
                                        <div class="row">
                                            
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
                                                                            <td>phone Call</td>
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
                                                                            <td>Enquiry</td>
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
                                                                            <td>Phone Enquiry</td>
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
                                    <div class="tab-pane p-0" id="not-contact-task-activity">
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
                                                    <div class="accordion-header js-accordion-header">Past Activity</div> 
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
                                </div>
                           
                          </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane p-0" id="attempted-contact">
                        <div>
                            <div class="task-infos">
                                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                                    <li class="nav-item"><a class="nav-link active" href="#attempted-task-details" data-toggle="tab">Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#attempted-task-related" data-toggle="tab">Related</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#attempted-task-activity" data-toggle="tab">Activity</a></li>
                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active p-0" id="attempted-task-details">
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
                                                              <td>John Doe</td>
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
                                                              <td>09/03/2000</td>
                                                          </tr>
                                                          <tr>
                                                              <td>Date of Next Activity</td>
                                                              <td>10/03/2000</td>
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
                                                        <td>Lorem</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Phone</td>
                                                        <td>(406) 653-3860</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Mobile Phone</td>
                                                        <td>9867656756</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Fax</td>
                                                        <td>1234</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Website</td>
                                                        <td>Lorem ipsum</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Industry</td>
                                                        <td>lorem ipsum</td>
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
                                                            <td>John Smith</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Converted Organization</td>
                                                            <td>Claimpett Corp</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Converted Opportunity</td>
                                                            <td>Lorem ipsum</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                        
                                    <div class="tab-pane task-related p-0" id="attempted-task-related">
                                        <div class="row">
                                            
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
                                                                            <td>Phone Call</td>
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
                                                                            <td>Enquiry</td>
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
                                    <div class="tab-pane p-0" id="attempted-task-activity">
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
                                </div>
                           
                          </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane p-0" id="contact">
                        <div>
                            <div class="task-infos">
                                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                                    <li class="nav-item"><a class="nav-link active" href="#contact-task-details" data-toggle="tab">Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#contact-task-related" data-toggle="tab">Related</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#contact-task-activity" data-toggle="tab">Activity</a></li>
                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active p-0" id="contact-task-details">
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
                                                              <td>John Doe</td>
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
                                                              <td>09/02/2000</td>
                                                          </tr>
                                                          <tr>
                                                              <td>Date of Next Activity</td>
                                                              <td>07/02/2010</td>
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
                                                        <td>Lorem</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Phone</td>
                                                        <td>(406) 653-3860</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Mobile Phone</td>
                                                        <td>8987454554</td>
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
                                                        <td>Industry</td>
                                                        <td>IT</td>
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
                                                            <td>John Doe</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Converted Organization</td>
                                                            <td>Claimpett corp</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Converted Opportunity</td>
                                                            <td>Lorem ipsum</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                        
                                    <div class="tab-pane task-related p-0" id="contact-task-related">
                                        <div class="row">
                                            
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
                                                    <div class="accordion-header js-accordion-header">Notes</div> 
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
                                                                            <td>Phone Call</td>
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
                                                                            <td>Enquiry</td>
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
                                                                            <td>Phone Call</td>
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
                                    <div class="tab-pane p-0" id="contact-task-activity">
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
                                                    <div class="accordion-header js-accordion-header">Past Activity</div> 
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
                                </div>
                           
                          </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane p-0" id="converted">
                        <div>
                            <div class="task-infos">
                                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                                    <li class="nav-item"><a class="nav-link active" href="#converted-task-details" data-toggle="tab">Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#converted-task-related" data-toggle="tab">Related</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#converted-task-activity" data-toggle="tab">Activity</a></li>
                                    
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active p-0" id="converted-task-details">
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
                                                              <td>Williams</td>
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
                                                              <td>09/01/2020</td>
                                                          </tr>
                                                          <tr>
                                                              <td>Date of Next Activity</td>
                                                              <td>09/01/2020</td>
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
                                                        <td>9867657655</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Fax</td>
                                                        <td>1234</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Website</td>
                                                        <td>googlee.com</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Industry</td>
                                                        <td>IT</td>
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
                                                            <td>John Doe</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Converted Organization</td>
                                                            <td>Solemen corp</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Converted Opportunity</td>
                                                            <td>Lorem Ipsum</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>
                                      </div>
                                    </div>
                                    </div>
                                        
                                    <div class="tab-pane task-related p-0" id="converted-task-related">
                                        <div class="row">
                                            
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
                                                                            <td>Phone call</td>
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
                                                                            <td>Call Enquiry</td>
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
                                                                            <td>Phone Call</td>
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
                                    <div class="tab-pane p-0" id="converted-task-activity">
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
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crms-laravel\template\resources\views/leads.blade.php ENDPATH**/ ?>