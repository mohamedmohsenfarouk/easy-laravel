
<?php $__env->startSection('content'); ?>		
<!-- Page Wrapper -->
<div class="page-wrapper">
			
            <!-- Page Content -->
            <div class="content container-fluid">

                <div class="crms-title row bg-white">
                    <div class="col">
                        <h3 class="page-title m-0">
                        <span class="page-title-icon bg-gradient-primary text-white mr-2">
                          <i class="feather-radio"></i>
                        </span> Deals </h3>
                    </div>
                    <div class="col text-right">
                        <ul class="breadcrumb bg-white float-right m-0 pl-0 pr-0">
                            <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Deals</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Page Header -->
                <div class="page-header pt-3 mb-0 ">
                    <div class="row">
                        <div class="col">
                            <div class="dropdown">
                                <a class="dropdown-toggle recently-viewed" href="#" role="button" data-toggle="dropdown" aria-expanded="false"> All Deals</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Recently Viewed</a>
                                    <a class="dropdown-item" href="#">Items I'm following</a>
                                    <a class="dropdown-item" href="#">All Deals</a>
                                    <a class="dropdown-item" href="#">All Closed Deals</a>
                                    <a class="dropdown-item" href="#">All Open Deals</a>
                                    <a class="dropdown-item" href="#">My Deals</a>
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
                                        <a class="dropdown-item" href="deals">List View</a>
                                        <a class="dropdown-item" href="deals-kanban-view">Kanban View</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add-new-list">Add New List View</a>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <button class="add btn btn-gradient-primary font-weight-bold text-white todo-list-add-btn btn-rounded" id="add-task" data-toggle="modal" data-target="#add_deal">New Deal</button>
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
                                                <th>Deal Name</th>
                                                <th>Company</th>
                                                <th>Pipeline</th>
                                                <th>Forecast Close Date</th>
                                                <th>User Responsible</th>
                                                <th>Deal Value</th>
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
                                                    <a href="#"><span class="person-circle-a person-circle">B</span></a>
                                                    <a href="#" data-toggle="modal" data-target="#deal-details">Bensolet</a>
                                                </td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Globex</a></td>
                                                <td>
                                                    <div class="pipeline-small flat ">
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Prospecting">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top planning" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Qualification">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Needs Analysis">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top planning" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Proposal">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Negotiation">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Closed Won">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>06-Aug-20</td>
                                                <td>John Doe</td>
                                                <td>USD $‎180</td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Edit This Deal</a>
                                                            <a class="dropdown-item" href="#">Change Deal Image</a>
                                                            <a class="dropdown-item" href="#">Clone This Deal</a>
                                                            <a class="dropdown-item" href="#">Delete This Deal</a>
                                                            <a class="dropdown-item" href="#">Change Record Owner</a>
                                                            <a class="dropdown-item" href="#">Generate Merge Document</a>
                                                            <a class="dropdown-item" href="#">Print This Deal</a>
                                                            <a class="dropdown-item" href="#">Add New Task For Deal</a>
                                                            <a class="dropdown-item" href="#">Add New Event For Deal</a>
                                                            <a class="dropdown-item" href="#">Add Activity Set To Deal</a>
                                                            <a class="dropdown-item" href="#">Convert To Deal</a>
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
                                                    <a href="#"><span class="person-circle-b person-circle">W</span></a>
                                                    <a href="#" data-toggle="modal" data-target="#deal-details">Whirligig G990</a>
                                                </td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Massive</a></td>
                                                <td>
                                                    <div class="pipeline-small flat">
                                                        <a class="won noselect tipped-top planning" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Prospecting">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Qualification">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Needs Analysis">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Proposal">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Negotiation">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top planning" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Closed Won">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>01-May-18</td>
                                                <td>John Doe</td>
                                                <td>USD $‎180</td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Edit This Deal</a>
                                                            <a class="dropdown-item" href="#">Change Deal Image</a>
                                                            <a class="dropdown-item" href="#">Clone This Deal</a>
                                                            <a class="dropdown-item" href="#">Delete This Deal</a>
                                                            <a class="dropdown-item" href="#">Change Record Owner</a>
                                                            <a class="dropdown-item" href="#">Generate Merge Document</a>
                                                            <a class="dropdown-item" href="#">Print This Deal</a>
                                                            <a class="dropdown-item" href="#">Add New Task For Deal</a>
                                                            <a class="dropdown-item" href="#">Add New Event For Deal</a>
                                                            <a class="dropdown-item" href="#">Add Activity Set To Deal</a>
                                                            <a class="dropdown-item" href="#">Convert To Deal</a>
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
                                                    <a href="#"><span class="person-circle-c person-circle">A</span></a>
                                                    <a href="#" data-toggle="modal" data-target="#deal-details">Ansanio tech</a>
                                                </td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Vehement </a></td>
                                                <td>
                                                    <div class="pipeline-small flat">
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Prospecting">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top planning" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Qualification">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Needs Analysis">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Proposal">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Negotiation">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top planning" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Closed Won">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>02-Jan-19</td>
                                                <td>John Doe</td>
                                                <td>USD $‎180</td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Edit This Deal</a>
                                                            <a class="dropdown-item" href="#">Change Deal Image</a>
                                                            <a class="dropdown-item" href="#">Clone This Deal</a>
                                                            <a class="dropdown-item" href="#">Delete This Deal</a>
                                                            <a class="dropdown-item" href="#">Change Record Owner</a>
                                                            <a class="dropdown-item" href="#">Generate Merge Document</a>
                                                            <a class="dropdown-item" href="#">Print This Deal</a>
                                                            <a class="dropdown-item" href="#">Add New Task For Deal</a>
                                                            <a class="dropdown-item" href="#">Add New Event For Deal</a>
                                                            <a class="dropdown-item" href="#">Add Activity Set To Deal</a>
                                                            <a class="dropdown-item" href="#">Convert To Deal</a>
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
                                                    <a href="#"><span class="person-circle-d person-circle">S</span></a>
                                                    <a href="#" data-toggle="modal" data-target="#deal-details">Sensored Lecto</a>
                                                </td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Hooli </a></td>
                                                <td>
                                                    <div class="pipeline-small flat">
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Prospecting">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Qualification">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Needs Analysis">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top planning" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Proposal">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Negotiation">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Closed Won">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>12-Jul-20</td>
                                                <td>Williams</td>
                                                <td>USD $‎180</td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Edit This Deal</a>
                                                            <a class="dropdown-item" href="#">Change Deal Image</a>
                                                            <a class="dropdown-item" href="#">Clone This Deal</a>
                                                            <a class="dropdown-item" href="#">Delete This Deal</a>
                                                            <a class="dropdown-item" href="#">Change Record Owner</a>
                                                            <a class="dropdown-item" href="#">Generate Merge Document</a>
                                                            <a class="dropdown-item" href="#">Print This Deal</a>
                                                            <a class="dropdown-item" href="#">Add New Task For Deal</a>
                                                            <a class="dropdown-item" href="#">Add New Event For Deal</a>
                                                            <a class="dropdown-item" href="#">Add Activity Set To Deal</a>
                                                            <a class="dropdown-item" href="#">Convert To Deal</a>
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
                                                    <a href="#"><span class="person-circle-h person-circle">H</span></a>
                                                    <a href="#" data-toggle="modal" data-target="#deal-details">Hentry Dio</a>
                                                </td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Umbrella</a></td>
                                                <td>
                                                    <div class="pipeline-small flat">
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Prospecting">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Qualification">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Needs Analysis">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top planning" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Proposal">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Negotiation">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Closed Won">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>03-Jul-20</td>
                                                <td>David cravo</td>
                                                <td>USD $‎180</td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Edit This Deal</a>
                                                            <a class="dropdown-item" href="#">Change Deal Image</a>
                                                            <a class="dropdown-item" href="#">Clone This Deal</a>
                                                            <a class="dropdown-item" href="#">Delete This Deal</a>
                                                            <a class="dropdown-item" href="#">Change Record Owner</a>
                                                            <a class="dropdown-item" href="#">Generate Merge Document</a>
                                                            <a class="dropdown-item" href="#">Print This Deal</a>
                                                            <a class="dropdown-item" href="#">Add New Task For Deal</a>
                                                            <a class="dropdown-item" href="#">Add New Event For Deal</a>
                                                            <a class="dropdown-item" href="#">Add Activity Set To Deal</a>
                                                            <a class="dropdown-item" href="#">Convert To Deal</a>
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
                                                    <a href="#"><span class="person-circle-f person-circle">F</span></a>
                                                    <a href="#" data-toggle="modal" data-target="#deal-details">Feneldo</a>
                                                </td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Initech </a></td>
                                                <td>
                                                    <div class="pipeline-small flat">
                                                        <a class="won noselect tipped-top planning" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Prospecting">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Qualification">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Needs Analysis">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top planning" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Proposal">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Negotiation">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Closed Won">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>03-Jul-20</td>
                                                <td>Siphen David</td>
                                                <td>USD $‎180</td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Edit This Deal</a>
                                                            <a class="dropdown-item" href="#">Change Deal Image</a>
                                                            <a class="dropdown-item" href="#">Clone This Deal</a>
                                                            <a class="dropdown-item" href="#">Delete This Deal</a>
                                                            <a class="dropdown-item" href="#">Change Record Owner</a>
                                                            <a class="dropdown-item" href="#">Generate Merge Document</a>
                                                            <a class="dropdown-item" href="#">Print This Deal</a>
                                                            <a class="dropdown-item" href="#">Add New Task For Deal</a>
                                                            <a class="dropdown-item" href="#">Add New Event For Deal</a>
                                                            <a class="dropdown-item" href="#">Add Activity Set To Deal</a>
                                                            <a class="dropdown-item" href="#">Convert To Deal</a>
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
                                                    <a href="#"><span class="person-circle-i person-circle">I</span></a>
                                                    <a href="#" data-toggle="modal" data-target="#deal-details">Iresope Meldo</a>
                                                </td>
                                                <td><a href="#" data-toggle="modal" data-target="#company-details">Soylent Corp</a></td>
                                                <td>
                                                    <div class="pipeline-small flat">
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Prospecting">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top planning" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Qualification">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top planning" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Needs Analysis">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top " data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Proposal">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Negotiation">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                        <a class="won noselect tipped-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="stage: Closed Won">
                                                          <span class="stretched-link" data-toggle="modal" data-target="#deal-details"></span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>03-Jul-20</td>
                                                <td>John Smith</td>
                                                <td>USD $‎180</td>
                                                <td class="checkBox"><i class="fa fa-star" aria-hidden="true"></i></td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#">Edit This Deal</a>
                                                            <a class="dropdown-item" href="#">Change Deal Image</a>
                                                            <a class="dropdown-item" href="#">Clone This Deal</a>
                                                            <a class="dropdown-item" href="#">Delete This Deal</a>
                                                            <a class="dropdown-item" href="#">Change Record Owner</a>
                                                            <a class="dropdown-item" href="#">Generate Merge Document</a>
                                                            <a class="dropdown-item" href="#">Print This Deal</a>
                                                            <a class="dropdown-item" href="#">Add New Task For Deal</a>
                                                            <a class="dropdown-item" href="#">Add New Event For Deal</a>
                                                            <a class="dropdown-item" href="#">Add Activity Set To Deal</a>
                                                            <a class="dropdown-item" href="#">Convert To Deal</a>
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
        <div class="modal right fade" id="add_deal" tabindex="-1" role="dialog" aria-modal="true">
            <div class="modal-dialog" role="document">
                <button type="button" class="close md-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title text-center">Add Deal</h4>
                        <button type="button" class="close xs-close" data-dismiss="modal">×</button>
                      </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form>
                                    <h4>Task Details</h4>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label class="col-form-label">Deal Name <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="deal-name" placeholder="Deal Name">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Company</label>
                                            <select class="form-control">
                                                <option>Select</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h4>Additional Information</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Caregory</label>
                                            <select class="form-control">
                                                <option>Email</option>
                                                <option>Follow up</option>
                                                <option>Get Started</option>
                                                <option>Meeting</option>
                                                <option>Phone call</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Probability Of Winning</label>
                                            <input class="form-control" type="text" name="probability" placeholder="Probability Of Winning">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Forecast Close Date <span class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker" type="text" placeholder="MM/DD/YY"></div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Actual Close Date <span class="text-danger">*</span></label>
                                            <div class="cal-icon"><input class="form-control datetimepicker" type="text" placeholder="MM/DD/YY"></div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">User Responsible</label>
                                            <select class="form-control">
                                                <option>John Doe</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Deal Value</label>
                                            <div class="row">
                                              <div class="col-md-4">
                                                <select class="form-control">
                                                    <option>USD $</option>
                                                    <option>UGX $</option>
                                                </select>
                                              </div>
                                              <div class="col-md-4">
                                                <input type="text" name="amt" class="form-control"  placeholder="Bid Amount">
                                              </div>
                                              <div class="col-md-4">
                                                <select class="form-control">
                                                    <option>Fixed Bid</option>
                                                    <option>Per Hour</option>
                                                    <option>Per Day</option>
                                                </select>
                                              </div>
                                            </div>
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
                                    <h4>Pipeline & Stages</h4>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class="col-form-label">Pipeline</label>
                                            <select class="form-control">
                                                <option>Deal Pipeline</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Stage</label>
                                            <select class="form-control">
                                                <option>select</option>
                                            </select>
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
                          <span class="modal-title">Globex</span>
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
                        <p>Lorem ipsum</p>
                      </div>
                      <div class="col">
                        <span>Companies</span>
                        <p>Claimpett Corp</p>
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
                                            <td>Lorem Ipsum</td>
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
                                            <td>Escalon Street</td>
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
                                            <td>09/01/2020</td>
                                          </tr>
                                          <tr>
                                            <td>Organization Created</td>
                                            <td>03-Jun-20 1:14 AM</td>
                                          </tr>
                                           <tr>
                                            <td>Date of Next Activity </td>
                                            <td>03/03/2018</td>
                                          </tr>
                                          <tr>
                                            <td>Date of Last Activity </td>
                                            <td>03/03/2020</td>
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
                                <div class="crms-tasks  p-2">
                                    <div class="tasks__item crms-task-item active">
                                        <div class="accordion-header js-accordion-header">Companies </div> 
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
                                        <div class="accordion-header js-accordion-header">Deals </div> 
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
                                        <div class="accordion-header js-accordion-header">Projects </div> 
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
                                                                <td>Email Enquiry</td>
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
                                                                <td>Email Enquiry</td>
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
                            <div class="row ">
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

        <!--Deal details Modal -->
        <div class="modal right fade" id="deal-details" tabindex="-1" role="dialog" aria-modal="true">
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
                          <p class="mb-0">Deal</p>
                          <span class="modal-title">Globex</span>
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
                        <p>Phone Call</p>
                      </div>
                      <div class="col">
                        <span>Companies</span>
                        <p>Claimpett Corp</p>
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
                                                  <td class="border-0">Record ID</td>
                                                  <td class="border-0">124192692</td>
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
                                                  <td>02/01/2020</td>
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
                                              <td class="border-0">Start Date</td>
                                              <td class="border-0">04/01/2013</td>
                                            </tr>
                                            <tr>
                                              <td>Reminder Date</td>
                                              <td>07/01/2013</td>
                                            </tr>
                                            <tr>
                                              <td>Repeats</td>
                                              <td>Lorem</td>
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
                                              <td class="border-0">Related To</td>
                                              <td class="border-0">Lorem ipsum</td>
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
                                              <td class="border-0">Description</td>
                                              <td class="border-0">Lorem ipsum enum</td>
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
                                              <td class="border-0">Task visibility</td>
                                              <td class="border-0">Private</td>
                                            </tr>
                                          </tbody>
                                    </table>
                                </div>
                                
                            </div>
                          </div>
                        </div>
                        </div>
                            
                        <div class="tab-pane task-related" id="pipeline-task-related">
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
                                                                <td class="border-0">
                                                                    <a href="#" class="avatar"><img alt="" src="assets/img/c-logo2.png"></a>
                                                                    <a href="#" data-toggle="modal" data-target="#company-details">Clampett Oil and Gas Corp.</a>
                                                                </td>
                                                                <td class="border-0">8754554531</td>
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
                                        <div class="accordion-header js-accordion-header">Deals </div> 
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
                                        <div class="accordion-header js-accordion-header">Projects </div> 
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
                    </div>
               
              </div>
            </div>

            </div><!-- modal-content -->
          </div><!-- modal-dialog -->
        </div><!-- modal -->
        <!--theme settings modal-->

		<div class="modal right fade settings" id="settings"  role="dialog" aria-modal="true">
				<div class="toggle-close">
          			<div class="toggle" data-toggle="modal" data-target="#settings"><i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
          			</div>
           
        		</div>
				<div class="modal-dialog" role="document">
					<div class="modal-content">

						<div class="modal-header p-3">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel2">Settings</h4>
						</div>

						<div class="modal-body pb-3">
							<div class="scroll">
							
				            <div>
				            	

				            	

				                <ul class="list-group">
				                    <li class="list-group-item border-0">
				                      <div class="row">
				                        <div class="col">
				                          <h5 class="pb-2">Primary Skin</h5>
				                        </div>
				                        <div class="col text-right">
				                          <a class="reset text-white bg-dark" id="ChangeprimaryDefault">Reset Default</a>
				                        </div>
				                      </div>
				                      <div class="theme-settings-swatches">
				                         <div class="themes">
												<div class="themes-body">
													<ul id="theme-change" class="theme-colors border-0 list-inline-item list-unstyled mb-0">
														<li class="theme-title">Solid Color</li>
														<li class="list-inline-item"><span class="theme-solid-black bg-black"></span></li>
														<li class="list-inline-item"><span class="theme-solid-pink bg-primary"></span></li>
														<li class="list-inline-item"><span class="theme-solid-orange bg-secondary1"></span></li> 
														<li class="list-inline-item"><span class="theme-solid-purple bg-success"></span></li>
														<!-- <li class="list-inline-item"><span class="theme-solid-blue bg-info"></span></li> -->
														<li class="list-inline-item"><span class="theme-solid-green bg-warnings"></span></li>
														<li><br /></li>
														<li><hr /></li>

														<li class="theme-title">Gradient Color</li>
														

														<li class="list-inline-item"><span class="theme-orange bg-sunny-morning"></span></li>
														<li class="list-inline-item"><span class="theme-blue bg-tempting-azure"></span></li> 
														<li class="list-inline-item"><span class="theme-grey bg-amy-crisp"></span></li>
														<li class="list-inline-item"><span class="theme-lgrey bg-mean-fruit"></span></li>
														<li class="list-inline-item"><span class="theme-dblue bg-malibu-beach"></span></li> 
														<li class="list-inline-item"><span class="theme-pink bg-ripe-malin"></span></li> 
														<li class="list-inline-item"><span class="theme-purple bg-plum-plate"></span></li>
														
													</ul>
												</div>
											</div>

				                         
				                      </div>
				                  	</li>
				              	</ul>
				              </div>

				              <div>
				                <ul class="list-group">
				                  <li class="list-group-item border-0">
				                     <div class="row">
				                      <div class="col">
				                        <h5 class="pb-2">Header Style</h5>
				                      </div>
				                      <div class="col text-right">
				                        <a class="reset text-white bg-dark" id="ChageheaderDefault">Reset Default</a>
				                      </div>
				                    </div>
				                    <div class="theme-settings-swatches">
				                    	<div class="themes">
											<div class="themes-body">
												<ul id="theme-change1" class="theme-colors border-0 list-inline-item list-unstyled mb-0">
														<li class="theme-title">Solid Color</li>
														<li class="list-inline-item"><span class="header-solid-black bg-black"></span></li>
														<li class="list-inline-item"><span class="header-solid-pink bg-primary"></span></li>
														<li class="list-inline-item"><span class="header-solid-orange bg-secondary1"></span></li> 
														<li class="list-inline-item"><span class="header-solid-purple bg-success"></span></li>
														<!-- <li class="list-inline-item"><span class="header-solid-blue bg-info"></span></li> -->
														<li class="list-inline-item"><span class="header-solid-green bg-warnings"></span></li>
														<li><br /></li>
														<li><hr /></li>

														<li class="theme-title">Gradient Color</li>

														<li class="list-inline-item"><span class="header-gradient-color1 bg-sunny-morning"></span></li>
														<li class="list-inline-item"><span class="header-gradient-color2 bg-tempting-azure"></span></li> 
														<li class="list-inline-item"><span class="header-gradient-color3 bg-amy-crisp"></span></li>
														<li class="list-inline-item"><span class="header-gradient-color4 bg-mean-fruit"></span></li>
														<li class="list-inline-item"><span class="header-gradient-color5 bg-malibu-beach"></span></li> 
														<li class="list-inline-item"><span class="header-gradient-color6 bg-ripe-malin"></span></li> 
														<li class="list-inline-item"><span class="header-gradient-color7 bg-plum-plate"></span></li>
														
												</ul>
											</div>
										</div>
				                        
				                      </div>
				                  </li>
				                </ul>
				              </div>
				              <div>
				                <ul class="list-group m-0">
				                  <li class="list-group-item border-0">
				                    <div class="row">
				                      <div class="col">
				                        <h5 class="pb-2">Apps Sidebar Style</h5>
				                      </div>
				                      <div class="col  text-right">
				                        <a class="reset text-white bg-dark" id="ChagesidebarDefault">Reset Default</a>
				                      </div>
				                    </div>
				                    <div class="theme-settings-swatches">
				                    	<div class="themes">
											<div class="themes-body">
												<ul id="theme-change2" class="theme-colors border-0 list-inline-item list-unstyled">
														<li class="theme-title">Solid Color</li>
														<li class="list-inline-item"><span class="sidebar-solid-black bg-black"></span></li>
														<li class="list-inline-item"><span class="sidebar-solid-pink bg-primary"></span></li>
														<li class="list-inline-item"><span class="sidebar-solid-orange bg-secondary1"></span></li> 
														<li class="list-inline-item"><span class="sidebar-solid-purple bg-success"></span></li>
														<!-- <li class="list-inline-item"><span class="sidebar-solid-blue bg-info"></span></li> -->
														<li class="list-inline-item"><span class="sidebar-solid-green bg-warnings"></span></li>
														<li><br /></li>
														<li><hr /></li>

														<li class="theme-title">Gradient Color</li>

														<li class="list-inline-item"><span class="sidebar-gradient-color1 bg-sunny-morning"></span></li>
														<li class="list-inline-item"><span class="sidebar-gradient-color2 bg-tempting-azure"></span></li> 
														<li class="list-inline-item"><span class="sidebar-gradient-color3 bg-amy-crisp"></span></li>
														<li class="list-inline-item"><span class="sidebar-gradient-color4 bg-mean-fruit"></span></li>
														<li class="list-inline-item"><span class="sidebar-gradient-color5 bg-malibu-beach"></span></li> 
														<li class="list-inline-item"><span class="sidebar-gradient-color6 bg-ripe-malin"></span></li> 
														<li class="list-inline-item"><span class="sidebar-gradient-color7 bg-plum-plate"></span></li>
														
												</ul>
											</div>
										</div>
				                        
				                      </div>
				                  </li>
				                </ul>
				                <div class="row Default-font">
				                	<div class="col">
				                        <h5 class="pb-2">Font Style</h5>
				                    </div>
				                    <div class="col text-right">
				                        <a class="reset text-white bg-dark font-Default">Reset Default</a>
				                    </div>
				                </div>
				                <ul class="list-inline-item list-unstyled font-family border-0 p-0">
				                  
				                  <li class="list-inline-item roboto-font" >Roboto</li>
				                  <li class="list-inline-item poppins-font">Poppins</li>
				                  <li class="list-inline-item montserrat-font" >Montserrat</li>
				                  <li class="list-inline-item inter-font">Inter</li>
				                </ul>
				            </div>
				            
				        </div>
						</div>

					</div>
				</div>
			</div>

		<!--theme settings-->
        <div class="sidebar-contact">
          	<div class="toggle" data-toggle="modal" data-target="#settings"><i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i></div>
           
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crms-laravel\blue\resources\views/deals.blade.php ENDPATH**/ ?>