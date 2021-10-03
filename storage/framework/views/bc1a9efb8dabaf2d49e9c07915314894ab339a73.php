<?php error_reporting(0);?>
<?php if(!Route::is(['email','mail-view','components'])): ?>
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                	<form action="search" class="mobile-view">
						<input class="form-control" type="text" placeholder="Search here">
						<button class="btn" type="button"><i class="fa fa-search"></i></button>
					</form>
					<div id="sidebar-menu" class="sidebar-menu">

						<ul>
							<li class="nav-item nav-profile">
				              <a href="#" class="nav-link">
				                <div class="nav-profile-image">
				                  <img src="assets/img/profiles/avatar-17.jpg" alt="profile">
				                  
				                </div>
				                <div class="nav-profile-text d-flex flex-column">
				                  <span class="font-weight-bold mb-2">David Grey. H</span>
				                  <span class="text-white text-small">Project Manager</span>
				                </div>
				                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
				              </a>
				            </li>
							<li class="menu-title"> 
								<span>Main</span>
							</li>
							<li class="submenu">
								<a href="#"><i class="feather-home"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a class="<?php if($page=="pagee") { echo 'active'; } ?>" href="index">Deals Dashboard</a></li>
									<li><a class="<?php if($page=="projects-dashboard") { echo 'active'; } ?>" href="projects-dashboard">Projects Dashboard</a></li>
									<li><a class="<?php if($page=="leads-dashboard") { echo 'active'; } ?>" href="leads-dashboard">Leads Dashboard</a></li>
								</ul>
							</li>
							
							<li class="<?php echo e(Request::is('tasks') ? 'active' : ''); ?>"> 
								<a href="tasks"><i class="feather-check-square"></i> <span>Tasks</span></a>
							</li>
							<li class="<?php echo e(Request::is('contacts') ? 'active' : ''); ?>"> 
								<a href="contacts"><i class="feather-smartphone"></i> <span>Contacts</span></a>
							</li>
							<li class="<?php echo e(Request::is('companies') ? 'active' : ''); ?>"> 
								<a href="companies"><i class="feather-database"></i> <span>Companies</span></a>
							</li>
							<li class="<?php echo e(Request::is('leads') ? 'active' : ''); ?>"> 
								<a href="leads"><i class="feather-user"></i> <span>Leads</span></a>
							</li>
							
							<li class="<?php echo e(Request::is('deals') ? 'active' : ''); ?>"> 
								<a href="deals"><i class="feather-radio"></i> <span>Deals</span></a>
							</li>
							<li class="<?php echo e(Request::is('projects') ? 'active' : ''); ?>"> 
								<a href="projects"><i class="feather-grid"></i> <span>Projects</span></a>
							</li>
							<li class="<?php echo e(Request::is('reports') ? 'active' : ''); ?>"> 
								<a href="reports"><i class="feather-bar-chart-2"></i> <span>Reports</span></a>
							</li>
							<li class="<?php echo e(Request::is('activities') ? 'active' : ''); ?>"> 
								<a href="activities"><i class="feather-calendar"></i> <span>Activities</span></a>
							</li>
							<li class="<?php echo e(Request::is('email') ? 'active' : ''); ?>"> 
								<a href="email"><i class="feather-mail"></i> <span>Email</span></a>
							</li>
							
							<li class="menu-title"> 
								<span>Pages</span>
							</li>
							
							<li class="submenu">
								<a href="#"><i class="feather-alert-triangle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a class="<?php if($page=="error-404") { echo 'active'; } ?>" href="error-404">404 Error </a></li>
									<li><a class="<?php if($page=="error-500") { echo 'active'; } ?>" href="error-500">500 Error </a></li>
								</ul>
							</li>
							
							<li class="submenu">
								<a href="#"><i class="feather-list"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a class="<?php if($page=="faq") { echo 'active'; } ?>" href="faq"> FAQ </a></li>
									<li><a class="<?php if($page=="terms") { echo 'active'; } ?>" href="terms"> Terms </a></li>
									<li><a class="<?php if($page=="privacy-policy") { echo 'active'; } ?>" href="privacy-policy"> Privacy Policy </a></li>
									<li><a class="<?php if($page=="blank-page") { echo 'active'; } ?>" href="blank-page"> Blank Page </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>UI Interface</span>
							</li>
							<li class="<?php echo e(Request::is('components') ? 'active' : ''); ?>"> 
								<a href="components"><i class="feather-layout"></i> <span>Components</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="feather-credit-card"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a class="<?php if($page=="form-basic-inputs") { echo 'active'; } ?>" href="form-basic-inputs">Basic Inputs </a></li>
									<li><a class="<?php if($page=="form-input-groups") { echo 'active'; } ?>" href="form-input-groups" >Input Groups </a></li>
									<li><a class="<?php if($page=="form-horizontal") { echo 'active'; } ?>" href="form-horizontal">Horizontal Form </a></li>
									<li><a class="<?php if($page=="form-vertical") { echo 'active'; } ?>" href="form-vertical"> Vertical Form </a></li>
									<li><a class="<?php if($page=="form-mask") { echo 'active'; } ?>" href="form-mask"> Form Mask </a></li>
									<li><a class="<?php if($page=="form-validation") { echo 'active'; } ?>" href="form-validation"> Form Validation </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="feather-box"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li><a class="<?php if($page=="tables-basic") { echo 'active'; } ?>" href="tables-basic">Basic Tables </a></li>
									<li><a class="<?php if($page=="data-tables") { echo 'active'; } ?>" href="data-tables">Data Table </a></li>
								</ul>
							</li>
							<li class="menu-title"> 
								<span>Extras</span>
							</li>
							
							<li class="submenu">
								<a href="javascript:void(0);"><i class="feather-command"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul class="sub-menus">
									<li class="submenu">
										<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul class="sub-menus">
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul class="sub-menus">
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"> <span>Level 1</span></a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
<?php endif; ?>
<!-- Sidebar -->
<?php if(Route::is(['email','mail-view'])): ?>
<div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                	<form action="search" class="mobile-view">
						<input class="form-control" type="text" placeholder="Search here">
						<button class="btn" type="button"><i class="fa fa-search"></i></button>
					</form>
					<div class="sidebar-menu">
						<ul>
							<li> 
								<a href="index"><i class="fa fa-home" aria-hidden="true"></i> <span>Back to Home</span></a>
							</li>
				             <li class="<?php echo e(Request::is('email') ? 'active' : ''); ?>"> 
				                <a href="email"><i class="fa fa-envelope menu-icon" aria-hidden="true"></i> <span>Inbox <span class="mail-count">(21)</span></span></a>
				            </li>
				            <li> 
				                <a href="#"><i class="fa fa-star menu-icon" aria-hidden="true"></i> <span>Starred</span></a>
				            </li>
				            <li> 
				                <a href="#"><i class="fa fa-paper-plane menu-icon" aria-hidden="true"></i> <span>Sent Mail</span></a>
				            </li>
				            <li> 
				                <a href="#"><i class="fa fa-trash menu-icon" aria-hidden="true"></i> <span>Trash</span></a>
				            </li>
				            <li> 
				                <a href="#"><i class="fa fa-folder-open-o menu-icon" aria-hidden="true"></i> <span>Draft <span class="mail-count">(8)</span></span></a>
				            </li>
              
							
							<li class="menu-title xs-hidden">Label <a href="#" class="label-icon"><i class="fa fa-plus"></i></a></li>
							<li class="xs-hidden"> 
								<a href="#"><i class="fa fa-circle text-success mail-label"></i> Work</a>
							</li>
							<li class="xs-hidden"> 
								<a href="#"><i class="fa fa-circle text-danger mail-label"></i> Office</a>
							</li>
							<li class="xs-hidden"> 
								<a href="#"><i class="fa fa-circle text-warning mail-label"></i> Personal</a>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			<?php endif; ?>	
<?php if(Route::is(['components'])): ?>
<!-- Sidebar -->
<div class="sidebar stickyside" id="sidebar">
                <div class="sidebar-inner slimscroll">
                	<form action="search" class="mobile-view">
						<input class="form-control" type="text" placeholder="Search here">
						<button class="btn" type="button"><i class="fa fa-search"></i></button>
					</form>
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li> 
								<a href="index">Back To Home</a>
							</li>
							<li class="menu-title"> 
								Components
							</li>
							<li> 
								<a href="#comp_alerts" class="active">Alerts</a>
							</li>
							<li> 
								<a href="#comp_breadcrumbs">Breadcrumbs</a>
							</li>
							<li> 
								<a href="#comp_buttons">Buttons</a>
							</li>
							<li> 
								<a href="#comp_cards">Cards</a>
							</li>
							<li> 
								<a href="#comp_dropdowns">Dropdowns</a>
							</li>
							<li> 
								<a href="#comp_pagination">Pagination</a>
							</li>
							<li> 
								<a href="#comp_progress">Progress</a>
							</li>
							<li> 
								<a href="#comp_tabs">Tabs</a>
							</li>
							<li> 
								<a href="#comp_typography">Typography</a>
							</li>
						</ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\crms-laravel\blue\resources\views/layout/partials/nav.blade.php ENDPATH**/ ?>