
<?php $__env->startSection('content'); ?>		
	<!-- Page Wrapper -->
    <div class="page-wrapper">
			
            <!-- Page Content -->
            <div class="content container-fluid">

                  <div class="crms-title row bg-white">
                    <div class="col  p-0">
                        <h3 class="page-title m-0">
                        <span class="page-title-icon bg-gradient-primary text-white mr-2">
                          <i class="fa fa-envelope menu-icon" aria-hidden="true"></i>
                        </span> Email </h3>
                      </div>
                      <div class="col p-0 text-right">
                        <ul class="breadcrumb bg-white float-right m-0 pl-0 pr-0">
                          <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                          <li class="breadcrumb-item active">Email</li>
                        </ul>
                      </div>
                  </div>
            
                <!-- Page Header -->
                <div class="page-header py-3 mb-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Inbox</h3>
                        </div>
                        <div class="col-auto float-right ml-auto">
                            <a href="#" data-toggle="modal" data-target="#compose-mail" class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded"><i class="fa fa-plus"></i> Compose</a>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="email-header">
                                    <div class="row mobile-view">
                                        <div class="top-action-left">
                                            <div class="float-left">
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Select <i class="fa fa-angle-down "></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">All</a>
                                                        <a class="dropdown-item" href="#">None</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Read</a>
                                                        <a class="dropdown-item" href="#">Unread</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Actions <i class="fa fa-angle-down "></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Reply</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Archive</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Mark As Read</a>
                                                        <a class="dropdown-item" href="#">Mark As Unread</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> <i class="fa fa-angle-down"></i></button>
                                                    <div role="menu" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Social</a>
                                                        <a class="dropdown-item" href="#">Forums</a>
                                                        <a class="dropdown-item" href="#">Updates</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Spam</a>
                                                        <a class="dropdown-item" href="#">Trash</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">New</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" data-toggle="dropdown" class="btn btn-white dropdown-toggle"><i class="fa fa-tags"></i> <i class="fa fa-angle-down"></i></button>
                                                    <div role="menu" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Work</a>
                                                        <a class="dropdown-item" href="#">Family</a>
                                                        <a class="dropdown-item" href="#">Social</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Primary</a>
                                                        <a class="dropdown-item" href="#">Promotions</a>
                                                        <a class="dropdown-item" href="#">Forums</a>
                                                    </div>
                                                </div>
                                                <button type="button" title="Refresh" data-toggle="tooltip" class="btn btn-white d-md-inline-block mb-3"><i class="fa fa-refresh"></i></button>
                                            </div>
                                            <div class="float-left d-none  d-sm-block">
                                                <input type="text" placeholder="Search Messages" class="form-control search-message">
                                            </div>
                                        </div>
                                        <div class="row top-action-right">
                                            <div class="col">
                                                <input type="text" placeholder="Search Messages" class="form-control search-message">
                                            </div>
                                            <div class="col">
                                                <div class="btn-group">
                                                    <a class="btn btn-white"><i class="fa fa-angle-left"></i></a>
                                                    <a class="btn btn-white"><i class="fa fa-angle-right"></i></a>
                                                        
                                                </div>
                                                <p class="text-muted d-md-inline-block">Showing 10 of 112 </p>
                                            </div>

                                        </div>
                                        
                                    </div>
                                    <div class="row web-view">
                                        <div class="col top-action-left">
                                            <div class="float-left">
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Select <i class="fa fa-angle-down "></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">All</a>
                                                        <a class="dropdown-item" href="#">None</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Read</a>
                                                        <a class="dropdown-item" href="#">Unread</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Actions <i class="fa fa-angle-down "></i></button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Reply</a>
                                                        <a class="dropdown-item" href="#">Forward</a>
                                                        <a class="dropdown-item" href="#">Archive</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Mark As Read</a>
                                                        <a class="dropdown-item" href="#">Mark As Unread</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> <i class="fa fa-angle-down"></i></button>
                                                    <div role="menu" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Social</a>
                                                        <a class="dropdown-item" href="#">Forums</a>
                                                        <a class="dropdown-item" href="#">Updates</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Spam</a>
                                                        <a class="dropdown-item" href="#">Trash</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">New</a>
                                                    </div>
                                                </div>
                                                <div class="btn-group dropdown-action">
                                                    <button type="button" data-toggle="dropdown" class="btn btn-white dropdown-toggle"><i class="fa fa-tags"></i> <i class="fa fa-angle-down"></i></button>
                                                    <div role="menu" class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Work</a>
                                                        <a class="dropdown-item" href="#">Family</a>
                                                        <a class="dropdown-item" href="#">Social</a>
                                                        <div class="dropdown-divider"></div> 
                                                        <a class="dropdown-item" href="#">Primary</a>
                                                        <a class="dropdown-item" href="#">Promotions</a>
                                                        <a class="dropdown-item" href="#">Forums</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="float-left d-none d-sm-block">
                                                <input type="text" placeholder="Search Messages" class="form-control search-message">
                                            </div>
                                        </div>
                                        <div class="col-auto top-action-right">
                                            <div class="text-right">
                                                <button type="button" title="Refresh" data-toggle="tooltip" class="btn btn-white d-none d-md-inline-block"><i class="fa fa-refresh"></i></button>
                                                <div class="btn-group">
                                                    <a class="btn btn-white"><i class="fa fa-angle-left"></i></a>
                                                    <a class="btn btn-white"><i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="text-right pt-2">
                                                <span class="text-muted d-none d-md-inline-block">Showing 10 of 112 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="email-content pt-3">
                                    <div class="table-responsive">
                                        <table class="table table-inbox table-hover">
                                            <thead>
                                                <tr>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="unread clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star starred"></i></span></td>
                                                    <td class="name">John Doe</td>
                                                    <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                    <td><i class="fa fa-paperclip"></i></td>
                                                    <td class="mail-date">13:14</td>
                                                </tr>
                                                <tr class="unread clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">Envato Account</td>
                                                    <td class="subject">Important account security update from Envato</td>
                                                    <td></td>
                                                    <td class="mail-date">8:42</td>
                                                </tr>
                                                <tr class="clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">Twitter</td>
                                                    <td class="subject">HRMS Bootstrap Admin Template</td>
                                                    <td></td>
                                                    <td class="mail-date">30 Nov</td>
                                                </tr>
                                                <tr class="unread clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">Richard Parker</td>
                                                    <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                    <td></td>
                                                    <td class="mail-date">18 Sep</td>
                                                </tr>
                                                <tr class="clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">John Smith</td>
                                                    <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                    <td></td>
                                                    <td class="mail-date">21 Aug</td>
                                                </tr>
                                                <tr class="clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">me, Robert Smith (3)</td>
                                                    <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                    <td></td>
                                                    <td class="mail-date">1 Aug</td>
                                                </tr>
                                                <tr class="unread clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">Codecanyon</td>
                                                    <td class="subject">Welcome To Codecanyon</td>
                                                    <td></td>
                                                    <td class="mail-date">Jul 13</td>
                                                </tr>
                                                <tr class="clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">Richard Miles</td>
                                                    <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                    <td><i class="fa fa-paperclip"></i></td>
                                                    <td class="mail-date">May 14</td>
                                                </tr>
                                                <tr class="unread clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star-o"></i></span></td>
                                                    <td class="name">John Smith</td>
                                                    <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                    <td></td>
                                                    <td class="mail-date">11/11/16</td>
                                                </tr>
                                                <tr class="clickable-row" data-href="mail-view">
                                                    <td>
                                                        <label class="container-checkbox">
                                                              <input type="checkbox">
                                                              <span class="checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td><span class="mail-important"><i class="fa fa-star starred"></i></span></td>
                                                    <td class="name">Mike Litorus</td>
                                                    <td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
                                                    <td></td>
                                                    <td class="mail-date">10/31/16</td>
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
            <!-- /Page Content -->
            
        </div>
        <!-- /Page Wrapper -->
        
    </div>
    <!-- /Main Wrapper -->


<!--compose mail-->
<!--modal section starts here-->
<div class="modal fade right" id="compose-mail">
    <div class="modal-dialog">
        <button type="button" class="close md-close" data-dismiss="modal">&times;</button>
        <div class="modal-content">
        
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Compose New Mail</h4>
            <button type="button" class="close xs-close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body pb-0">
            <div class="row">
              <div class="col-sm-12">
                <div class="card mb-0 border-0">
                  <div>
                    <form>
                      <div class="form-group">
                        <input type="email" placeholder="To" class="form-control">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="email" placeholder="Cc" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="email" placeholder="Bcc" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="text" placeholder="Subject" class="form-control">
                      </div>
                      <div class="form-group">
                        <textarea rows="4" class="form-control summernote" placeholder="Enter your message here"></textarea>
                      </div>
                      <div class="form-group mb-0">
                        <div class="text-center">
                          <button class="btn btn-primary"><span>Send</span> <i class="fa fa-send m-l-5"></i></button>
                          <button class="btn btn-success m-l-5" type="button"><span>Draft</span> <i class="fa fa-floppy-o m-l-5"></i></button>
                          <button class="btn btn-danger m-l-5" type="button"><span>Delete</span> <i class="fa fa-trash-o m-l-5"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crms-laravel\template\resources\views/email.blade.php ENDPATH**/ ?>