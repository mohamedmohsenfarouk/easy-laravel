
<?php $__env->startSection('content'); ?>		
<!-- Page Wrapper -->
<div class="page-wrapper">
			
            <!-- Page Content -->
            <div class="content container-fluid">

                <div class="crms-title row bg-white">
                    <div class="col ">
                        <h3 class="page-title m-0">
                        <span class="page-title-icon bg-gradient-primary text-white mr-2">
                          <i class="feather-smartphone"></i>
                        </span> Contacts </h3>
                    </div>
                    <div class="col text-right">
                        <ul class="breadcrumb bg-white float-right m-0 pl-0 pr-0">
                            <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Contacts</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Page Header -->
                <div class="page-header pt-3 mb-0 ">
                    <div class="row">
                        <div class="col">
                            <div class="dropdown">
                                <a class="dropdown-toggle recently-viewed" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> Recently Viewed</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Recently Viewed</a>
                                    <a class="dropdown-item" href="#">Items I'm following</a>
                                    <a class="dropdown-item" href="#">All Contacts</a>
                                       <a class="dropdown-item" href="#">Contacts added in the last 24 hours</a>
                                    <a class="dropdown-item" href="#">Contacts added in the last 7 days</a>
                                    <a class="dropdown-item" href="#">Contacts with no notes in the last month</a>
                                    <a class="dropdown-item" href="#">Contacts with no notes in the last 7 days</a>
                                </div>
                            </div>
                        </div>
                        <div class="col text-right">
                            <ul class="list-inline-item pl-0">
                                <li class="nav-item dropdown list-inline-item add-lists">
                                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                        <div class="nav-profile-text">
                                          <i class="fa fa-th" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add-new-list">Add New List View</a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <button class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded" id="add-task" data-toggle="modal" data-target="#add_contact">New Contact</button>
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
                                                <th class="checkBox">
                                                    <label class="container-checkbox">
                                                          <input type="checkbox">
                                                          <span class="checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>Full Name</th>
                                                <th>Title</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Tag List</th>
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
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
                                                    <a href="#" data-toggle="modal" data-target="#system-user">Wilmer Deluna</a>
                                                </td>
                                                <td>Facility Manager	</td>
                                                <td>
                                                    875455453
                                                </td>
                                                <td>wilmer@gmail.com	</td>
                                                <td><span class="badge badge-gradient-success">Sample_data</span></td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
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
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    <a href="#" data-toggle="modal" data-target="#system-user">John Doe</a>
                                                </td>
                                                <td>Manager</td>
                                                <td>
                                                    875455453
                                                </td>
                                                <td>john@gmail.com	</td>
                                                <td><span class="badge badge-gradient-info">Sample_data</span></td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
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
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-25.jpg"></a>
                                                    <a href="#" data-toggle="modal" data-target="#system-user">John Smith</a>
                                                </td>
                                                <td>CMO</td>
                                                <td>
                                                    875455453
                                                </td>
                                                <td>smith@gmail.com	</td>
                                                <td><span class="badge badge-gradient-danger">Sample_data</span></td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
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
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-26.jpg"></a>
                                                    <a href="#" data-toggle="modal" data-target="#system-user">Wilmer Deluna</a>
                                                </td>
                                                <td>Property Manager</td>
                                                <td>
                                                    875455453
                                                </td>
                                                <td>john@gmail.com</td>
                                                <td><span class="badge badge-gradient-warning">Sample_data</span></td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
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
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
                                                    <a href="#" data-toggle="modal" data-target="#system-user">Wilmer Deluna</a>
                                                </td>
                                                <td>Facility Manager	</td>
                                                <td>
                                                    875455453
                                                </td>
                                                <td>wilmer@gmail.com	</td>
                                                <td><span class="badge badge-gradient-success">Sample_data</span></td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
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
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-10.jpg"></a>
                                                    <a href="#" data-toggle="modal" data-target="#system-user">John Doe</a>
                                                </td>
                                                <td>Manager</td>
                                                <td>
                                                    875455453
                                                </td>
                                                <td>john@gmail.com	</td>
                                                <td><span class="badge badge-gradient-info">Sample_data</span></td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
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
                                                    <a href="#" class="avatar"><img alt="" src="assets/img/profiles/avatar-11.jpg"></a>
                                                    <a href="#" data-toggle="modal" data-target="#system-user">Vinson Jk</a>
                                                </td>
                                                <td>Facility Manager</td>
                                                <td>
                                                    875455453
                                                </td>
                                                <td>wilmer@gmail.com	</td>
                                                <td><span class="badge badge-gradient-warning">Sample_data</span></td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
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
        <div class="modal right fade" id="add_contact" tabindex="-1" role="dialog" aria-modal="true">
            <div class="modal-dialog" role="document">
                <button type="button" class="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title text-center">Add Contact</h4>
                        <button type="button" class="close xs-close" data-dismiss="modal">×</button>
                      </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                    <h4>Name & Occupation</h4>
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
                                    <h4>Contact Details</h4>
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
                                            <label class="col-form-label">Home Phone</label>
                                            <input type="text" class="form-control"  name="h-phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Mobile Phone</label>
                                            <input type="text" class="form-control" name="m-phone" placeholder="Phone">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Other Phone</label>
                                            <input type="text" class="form-control" id="o-phone" name="o-phone" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Assistant Phone</label>
                                            <input type="text" class="form-control" name="assistant-phone" placeholder="Phone">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Assistant Name</label>
                                            <input type="text" class="form-control"  name="assistant-name" placeholder="Assistant Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Fax</label>
                                            <input type="text" class="form-control" name="fax" placeholder="Fax">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Linkedin</label>
                                            <input type="text" class="form-control"  name="linkedin" placeholder="linkedin">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Facebook</label>
                                            <input type="text" class="form-control"  name="fb" placeholder="Facebook">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Twitter</label>
                                            <input type="text" class="form-control"  name="twitter" placeholder="Twitter">
                                        </div>
                                    </div>
                                    <h4>Address Information</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Mailing Address</label>
                                            <textarea class="form-control" rows="3" name="mailing-address" placeholder="Address"></textarea>
                                        </div>
                                        <div class="col-sm-6 mt-3">
                                            <label class="col-form-label"></label><br>
                                            <input type="text" class="form-control" placeholder="Mailing City" name="mailing-city">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Mailing State" name="mailing-state">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Mailing Postal code" name="mailing-postal-code">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Mailing Country</label>
                                            <select class="form-control">
                                                <option>India</option>
                                                <option>US</option>
                                                <option>Japan</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 mt-3">
                                            <label class="col-form-label">Other Address</label>
                                            <textarea class="form-control" rows="3" name="other-address" placeholder="Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Other City" name="other-city">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" placeholder="Other State" name="other-state">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control"  placeholder="Other Postal code" name="other-postal-code">
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control">
                                                <option>India</option>
                                                <option>US</option>
                                                <option>Japan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h4>Dates To Remember</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Due Date <span class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker" type="text" placeholder="MM/DD/YY"></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Date of Birth <span class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker" type="text" placeholder="MM/DD/YY"></div>
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
        <div class="modal right fade" id="system-user" tabindex="-1" role="dialog" aria-modal="true">
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

              <div class="card due-dates">
                  <div class="card-body">
                    <div class="row">
                      <div class="col">
                        <span>Title</span>
                        <p>Phone call</p>
                      </div>
                      <div class="col">
                        <span>Companies</span>
                        <p>Claimpett corp</p>
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
                                                <td>Umbrella</td>
                                              </tr>
                                              <tr>
                                                <td>Title</td>
                                                <td>Lorem ipsum</td>
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
                                            <td>9866667775</td>
                                          </tr>
                                          <tr>
                                            <td>Home Phone</td>
                                            <td>0422-656565</td>
                                          </tr>
                                          <tr>
                                            <td>Mobile Phone</td>
                                            <td>9887876556</td>
                                          </tr>
                                          <tr>
                                            <td>Other Phone</td>
                                            <td>9786778678</td>
                                          </tr>
                                          <tr>
                                            <td>Assistant Phone</td>
                                            <td>9877667676</td>
                                          </tr>
                                          <tr>
                                            <td>Assistant Name</td>
                                            <td>David</td>
                                          </tr>
                                          <tr>
                                            <td>Fax</td>
                                            <td>1234</td>
                                          </tr>
                                          <tr>
                                            <td>Linkedin</td>
                                            <td>Lorem Ipsum</td>
                                          </tr>
                                          <tr>
                                            <td>Facebook</td>
                                            <td>Lorem ipsum</td>
                                          </tr>
                                          <tr>
                                            <td>Twitter</td>
                                            <td>David_1</td>
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
                                        <td class="border-0">USA</td>
                                      </tr>
                                      <tr>
                                        <td>Other Address</td>
                                        <td>New York</td>
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
                                            <td class="border-0">09/03/2020</td>
                                          </tr>
                                          <tr>
                                            <td>Date of Birth</td>
                                            <td>04/08/2000</td>
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
                                                <td class="border-0">04/08/2000</td>
                                              </tr>
                                              <tr>
                                                <td>Date of Last Activity</td>
                                                <td>04/05/2010</td>
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
                            <div class="row pt-2">
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
                                <div class="crms-tasks  p-2">
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
                                        <div class="accordion-header js-accordion-header">Contacts </div> 
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
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="task-activity">
                            <div class="row pt-2">
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
                    </div>
                  </div>
            </div>

            </div><!-- modal-content -->
          </div><!-- modal-dialog -->
        </div><!-- modal -->

    <!--system users Modal -->
    <div class="modal right fade" id="company-details" role="dialog" aria-modal="true">
      <div class="modal-dialog" role="document">
        <button type="button" class="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close xs-close" data-dismiss="modal">×</button>
            <div class="row w-100">
              <div class="col-md-7 account">
                <p class="User-name">Company</p>
                <span><img src="assets/img/c-logo.png" alt="User" class="user-image" /></span>
                <span class="modal-title">Clampett Oil and Gas Corp.</span>&nbsp;
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
            <div class="task-infos">
                <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified">
                    <li class="nav-item"><a class="nav-link active" href="#company-task-details" data-toggle="tab">Details</a></li>
                    <li class="nav-item"><a class="nav-link" href="#company-task-related" data-toggle="tab">Related</a></li>
                    <li class="nav-item"><a class="nav-link" href="#company-task-activity" data-toggle="tab">Activity</a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="#company-task-news" data-toggle="tab">News</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="company-task-details">
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
                                        <td>lorem ipsum</td>
                                      </tr>
                                      <tr>
                                        <td>Facebook</td>
                                        <td>Lorem ipsum</td>
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
                                        <td></td>
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
                                        <td>08/01/2011</td>
                                      </tr>
                                      <tr>
                                        <td>Organization Created</td>
                                        <td>03-Jun-20 1:14 AM</td>
                                      </tr>
                                       <tr>
                                        <td>Date of Next Activity </td>
                                        <td>10/01/2017</td>
                                      </tr>
                                      <tr>
                                        <td>Date of Last Activity </td>
                                        <td>08/06/2017</td>
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
                        
                    <div class="tab-pane task-related" id="company-task-related">
                        <div class="row pt-3">
                            <div class="col-md-4">
                              <div class="card bg-gradient-danger card-img-holder text-white h-100">
                                <div class="card-body">
                                  <img src="assets/img/circle.png" class="card-img-absolute" alt="circle-image">
                                  <h4 class="font-weight-normal mb-3">Companies</h4>
                                  <span>1</span>
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
                                    <div class="accordion-header js-accordion-header">Companies </div> 
                                      <div class="accordion-body js-accordion-body">
                                        <div class="accordion-body__contents">
                                        </div>
                                    </div>
                                </div>
                                <div class="tasks__item crms-task-item">
                                    <div class="accordion-header js-accordion-header">Deals </div> 
                                      <div class="accordion-body js-accordion-body">
                                        <div class="accordion-body__contents">
                                        </div>
                                    </div>
                                </div>
                                <div class="tasks__item crms-task-item">
                                    <div class="accordion-header js-accordion-header">Projects</div> 
                                      <div class="accordion-body js-accordion-body">
                                        <div class="accordion-body__contents">
                                        </div>
                                    </div>
                                </div>
                                <div class="tasks__item crms-task-item">
                                    <div class="accordion-header js-accordion-header">Contacts </div> 
                                      <div class="accordion-body js-accordion-body">
                                        <div class="accordion-body__contents">
                                        </div>
                                    </div>
                                </div>
                                <div class="tasks__item crms-task-item">
                                    <div class="accordion-header js-accordion-header">Notes</div> 
                                      <div class="accordion-body js-accordion-body">
                                        <div class="accordion-body__contents">
                                        </div>
                                    </div>
                                </div>
                                <div class="tasks__item crms-task-item">
                                    <div class="accordion-header js-accordion-header">Files </div> 
                                      <div class="accordion-body js-accordion-body">
                                        <div class="accordion-body__contents">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="company-task-activity">
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
                                    <div class="accordion-header js-accordion-header">Upcoming Activity</div> 
                                      <div class="accordion-body js-accordion-body">
                                        <div class="accordion-body__contents">
                                        </div>
                                    </div>
                                </div>
                                <div class="tasks__item crms-task-item">
                                    <div class="accordion-header js-accordion-header">Past Activity</div> 
                                      <div class="accordion-body js-accordion-body">
                                        <div class="accordion-body__contents">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="company-task-news">
                        <div class="row pt-3">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crms-laravel\template\resources\views/contacts.blade.php ENDPATH**/ ?>