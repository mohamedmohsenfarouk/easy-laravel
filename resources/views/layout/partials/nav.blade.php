@if(!Route::is(['add-leave-type','add-role','change-password','chat','compose','edit-leave-type','edit-role','email-settings','inbox','incoming-call','invoice-settings','leave-type','localization','mail-view','notifications-settings','roles-permissions','salary-settings','settings','theme-settings','video-call','voice-call']))
<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">

						<ul>
							<li class="menu-title">Main</li>
							<li class="{{ Request::is('pagee') ? 'active' : '' }}">
								<a href="index"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
							</li>
							<li class="{{ Request::is('doctors','add-doctor','edit-doctor') ? 'active' : '' }}">
								<a href="doctors"><i class="fas fa-user-md"></i> Doctors</a>
							</li>
							<li class="{{ Request::is('patients','add-patient','edit-patient') ? 'active' : '' }}">
								<a href="patients"><i class="fas fa-wheelchair"></i> Patients</a>
							</li>
							<li class="{{ Request::is('appointments','add-appointment','add-asset','edit-appointment') ? 'active' : '' }}">
								<a href="appointments"><i class="far fa-calendar-alt"></i> Appointments</a>
							</li>
							<li class="{{ Request::is('schedule','add-schedule','edit-schedule') ? 'active' : '' }}">
								<a href="schedule"><i class="far fa-calendar-check"></i> Doctor Schedule</a>
							</li>
							<li class="{{ Request::is('departments','add-department','edit-department') ? 'active' : '' }}">
								<a href="departments"><i class="far fa-hospital"></i> Departments</a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php if($page=="employees" || $page=="add-employee" || $page=="edit-employee") { echo 'active'; } ?>" href="employees">Employees List</a></li>
									<li><a class="<?php if($page=="leaves" || $page=="add-leave" || $page=="edit-leave") { echo 'active'; } ?>" href="leaves">Leaves</a></li>
									<li><a class="<?php if($page=="holidays" || $page=="add-holiday" || $page=="edit-holiday") { echo 'active'; } ?>" href="holidays">Holidays</a></li>
									<li><a class="<?php if($page=="attendance") { echo 'active'; } ?>" href="attendance">Attendance</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php if($page=="invoices" || $page=="create-invoice"  || $page=="invoice-view" || $page=="edit-invoice") { echo 'active'; } ?>" href="invoices">Invoices</a></li>
									<li><a class="<?php if($page=="payments") { echo 'active'; } ?>" href="payments">Payments</a></li>
									<li><a class="<?php if($page=="expenses" || $page=="add-expense" || $page=="edit-expense") { echo 'active'; } ?>" href="expenses">Expenses</a></li>
									<li><a class="<?php if($page=="taxes" || $page=="add-tax" || $page=="edit-tax") { echo 'active'; } ?>" href="taxes">Taxes</a></li>
									<li><a class="<?php if($page=="provident-fund" || $page=="add-provident-fund" || $page=="edit-provident-fund") { echo 'active'; } ?>" href="provident-fund">Provident Fund</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php if($page=="salary" || $page=="add-salary" || $page=="edit-salary") { echo 'active'; } ?>" href="salary"> Employee Salary </a></li>
									<li><a class="<?php if($page=="salary-view") { echo 'active'; } ?>" href="salary-view"> Payslip </a></li>
								</ul>
							</li>
							<li class="{{ Request::is('chat') ? 'active' : '' }}">
								<a href="chat"><i class="fas fa-comments"></i> Chat <span class="badge badge-pill bg-primary float-right">5</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-video"></i></i> <span> Calls</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php if($page=="voice-call") { echo 'active'; } ?>" href="voice-call">Voice Call</a></li>
									<li><a class="<?php if($page=="video-call") { echo 'active'; } ?>" href="video-call">Video Call</a></li>
									<li><a class="<?php if($page=="incoming-call") { echo 'active'; } ?>" href="incoming-call">Incoming Call</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-envelope"></i> <span> Email</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php if($page=="compose") { echo 'active'; } ?>" href="compose">Compose Mail</a></li>
									<li><a class="<?php if($page=="inbox") { echo 'active'; } ?>" href="inbox">Inbox</a></li>
									<li><a class="<?php if($page=="mail-view") { echo 'active'; } ?>" href="mail-view">Mail View</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="far fa-comment-dots"></i> <span> Blog</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php if($page=="blog") { echo 'active'; } ?>" href="blog">Blog</a></li>
									<li><a class="<?php if($page=="blog-details" || $page=="client-profile") { echo 'active'; } ?>" href="blog-details">Blog View</a></li>
									<li><a class="<?php if($page=="add-blog") { echo 'active'; } ?>" href="add-blog">Add Blog</a></li>
									<li><a class="<?php if($page=="edit-blog") { echo 'active'; } ?>" href="edit-blog">Edit Blog</a></li>
								</ul>
							</li>
							<li class="{{ Request::is('asset','edit-asset') ? 'active' : '' }}">
								<a href="asset"><i class="fas fa-cube"></i> Assets</a>
							</li>
							<li class="{{ Request::is('activities') ? 'active' : '' }}">
								<a href="activities"><i class="far fa-bell"></i> Activities</a>
							</li>
							<li class="submenu">
								<a href="#"><i class="far fa-flag"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php if($page=="expense-reports") { echo 'active'; } ?>" href="expense-reports"> Expense Report </a></li>
									<li><a class="<?php if($page=="invoice-reports") { echo 'active'; } ?>" href="invoice-reports"> Invoice Report </a></li>
								</ul>
							</li>
							<li class="{{ Request::is('settings') ? 'active' : '' }}">
								<a href="settings"><i class="fas fa-cog"></i> Settings</a>
							</li>
							<li class="menu-title">UI Elements</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-laptop"></i> <span> Components</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php if($page=="uikit") { echo 'active'; } ?>" href="uikit">UI Kit</a></li>
									<li><a class="<?php if($page=="typography") { echo 'active'; } ?>" href="typography">Typography</a></li>
									<li><a class="<?php if($page=="tabs") { echo 'active'; } ?>" href="tabs">Tabs</a></li>
								</ul>
							</li>
							<li class="{{ Request::is('widgets') ? 'active' : '' }}">
								<a href="widgets"><i class="fas fa-th"></i> Widgets</a>
							</li>
							<li class="submenu">
								<a href="#"><i class="far fa-edit"></i> <span> Forms</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php if($page=="form-basic-inputs") { echo 'active'; } ?>" href="form-basic-inputs">Basic Inputs</a></li>
									<li><a class="<?php if($page=="form-input-groups") { echo 'active'; } ?>" href="form-input-groups">Input Groups</a></li>
									<li><a class="<?php if($page=="form-horizontal") { echo 'active'; } ?>" href="form-horizontal">Horizontal Form</a></li>
									<li><a class="<?php if($page=="form-vertical") { echo 'active'; } ?>" href="form-vertical">Vertical Form</a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-table"></i> <span> Tables</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php if($page=="tables-basic") { echo 'active'; } ?>" href="tables-basic">Basic Tables</a></li>
									<li><a class="<?php if($page=="tables-datatables") { echo 'active'; } ?>" href="tables-datatables">Data Table</a></li>
								</ul>
							</li>
							<li class="{{ Request::is('calendar') ? 'active' : '' }}">
								<a href="calendar"><i class="far fa-calendar-alt"></i> Calendar</a>
							</li>
							<li class="menu-title">Extras</li>
							<li class="submenu">
								<a href="#"><i class="fas fa-columns"></i> <span>Pages</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a class="<?php if($page=="login") { echo 'active'; } ?>" href="login"> Login </a></li>
									<li><a class="<?php if($page=="register") { echo 'active'; } ?>" href="register"> Register </a></li>
									<li><a class="<?php if($page=="forgot-password") { echo 'active'; } ?>" href="forgot-password"> Forgot Password </a></li>
									<li><a class="<?php if($page=="change-password2") { echo 'active'; } ?>" href="change-password2"> Change Password </a></li>
									<li><a class="<?php if($page=="lock-screen") { echo 'active'; } ?>" href="lock-screen"> Lock Screen </a></li>
									<li><a class="<?php if($page=="profile" || $page=="edit-profile") { echo 'active'; } ?>" href="profile"> Profile </a></li>
									<li><a class="<?php if($page=="gallery") { echo 'active'; } ?>" href="gallery"> Gallery </a></li>
									<li><a class="<?php if($page=="error-404") { echo 'active'; } ?>" href="error-404">404 Error </a></li>
									<li><a class="<?php if($page=="error-500") { echo 'active'; } ?>" href="error-500">500 Error </a></li>
									<li><a class="<?php if($page=="coming-soon") { echo 'active'; } ?>" href="coming-soon">Coming Soon </a></li>
									<li><a class="<?php if($page=="blank-page") { echo 'active'; } ?>" href="blank-page"> Blank Page </a></li>
								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:void(0);"><i class="fas fa-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li class="submenu">
										<a href="javascript:void(0);"><span>Level 1</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
											<li class="submenu">
												<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
												<ul style="display: none;">
													<li><a href="javascript:void(0);">Level 3</a></li>
													<li><a href="javascript:void(0);">Level 3</a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
										</ul>
									</li>
									<li>
										<a href="javascript:void(0);"><span>Level 1</span></a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			@endif
			@if(Route::is(['add-leave-type','add-role','change-password','edit-leave-type','edit-role','email-settings','invoice-settings','leave-type','localization','notifications-settings','roles-permissions','salary-settings','settings','theme-settings']))
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div class="sidebar-menu">
						<ul>
							<li class="{{ Request::is('pagee') ? 'active' : '' }}">
								<a href="index"><i class="fas fa-home back-icon"></i> Back to Home</a>
							</li>
							<li class="menu-title">Settings</li>
							<li class="{{ Request::is('settings') ? 'active' : '' }}">
								<a href="settings">Company Settings</a>
							</li>
							<li class="{{ Request::is('localization') ? 'active' : '' }}">
								<a href="localization">Localization</a>
							</li>
							<li class="{{ Request::is('theme-settings') ? 'active' : '' }}">
								<a href="theme-settings">Theme Settings</a>
							</li>
							<li class="{{ Request::is('roles-permissions','add-role','edit-role') ? 'active' : '' }}">
								<a href="roles-permissions">Roles & Permissions</a>
							</li>
							<li class="{{ Request::is('email-settings') ? 'active' : '' }}">
								<a href="email-settings">Email Settings</a>
							</li>
							<li class="{{ Request::is('invoice-settings') ? 'active' : '' }}">
								<a href="invoice-settings">Invoice Settings</a>
							</li>
							<li class="{{ Request::is('salary-settings') ? 'active' : '' }}">
								<a href="salary-settings">Salary Settings</a>
							</li>
							<li class="{{ Request::is('notifications-settings') ? 'active' : '' }}">
								<a href="notifications-settings">Notifications</a>
							</li>
							<li class="{{ Request::is('change-password') ? 'active' : '' }}">
								<a href="change-password">Change Password</a>
							</li>
							<li class="{{ Request::is('leave-type','add-leave-type','edit-leave-type') ? 'active' : '' }}">
								<a href="leave-type">Leave Type</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			@endif
			@if(Route::is(['chat','incoming-call','video-call','voice-call']))
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div class="sidebar-menu">
						<ul>
							<li>
								<a href="index"><i class="fas fa-home back-icon"></i> Back to Home</a>
							</li>
							<li class="menu-title">Chat Groups <a href="#" class="add-user-icon" data-toggle="modal" data-target="#add_group"><i class="fas fa-plus"></i></a></li>
							<li>
								<a href="chat">#General</a>
							</li>
							<li>
								<a href="chat">#Video Responsive Survey</a>
							</li>
							<li>
								<a href="chat">#500rs</a>
							</li>
							<li>
								<a href="chat">#warehouse</a>
							</li>
							<li class="menu-title">Direct Chats <a href="#" class="add-user-icon" data-toggle="modal" data-target="#add_chat_user"><i class="fas fa-plus"></i></a></li>
							<li>
								<a href="chat"><span class="chat-avatar-sm user-img"><img src="assets/img/user.jpg" alt="" class="rounded-circle"><span class="status online"></span></span> John Doe <span class="badge badge-pill bg-danger float-right">1</span></a>
							</li>
							<li>
								<a href="chat"><span class="chat-avatar-sm user-img"><img src="assets/img/user.jpg" alt="" class="rounded-circle"><span class="status offline"></span></span> Richard Miles <span class="badge badge-pill bg-danger float-right">18</span></a>
							</li>
							<li>
								<a href="chat"><span class="chat-avatar-sm user-img"><img src="assets/img/user.jpg" alt="" class="rounded-circle"><span class="status away"></span></span> John Smith</a>
							</li>
							<li class="{{ Request::is('chat','video-call','voice-call') ? 'active' : '' }}">
								<a href="chat"><span class="chat-avatar-sm user-img"><img src="assets/img/user.jpg" alt="" class="rounded-circle"><span class="status online"></span></span> Jennifer Robinson <span class="badge badge-pill bg-danger float-right">108</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			@endif
			@if(Route::is(['compose']))
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div class="sidebar-menu">
						<ul>
							<li class="{{ Request::is('inbox') ? 'active' : '' }}">
								<a href="inbox"><i class="fas fa-home back-icon"></i> Back to Inbox</a>
							</li>
							<li class="{{ Request::is('inbox') ? 'active' : '' }}">
								<a href="inbox">Inbox <span class="mail-count">(21)</span></a>
							</li>
							<li>
								<a href="#">Starred</a>
							</li>
							<li>
								<a href="#">Sent Mail</a>
							</li>
							<li>
								<a href="#">Draft <span class="mail-count">(8)</span></a>
							</li>
							<li>
								<a href="#">Trash</a>
							</li>
							<li class="menu-title">Label <a href="#" class="add-user-icon"><i class="fas fa-plus"></i></a></li>
							<li>
								<a href="#"><i class="fas fa-circle text-success mail-label"></i> Work</a>
							</li>
							<li>
								<a href="#"><i class="fas fa-circle text-danger mail-label"></i> Office</a>
							</li>
							<li>
								<a href="#"><i class="fas fa-circle text-warning mail-label"></i> Personal</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			@endif
			@if(Route::is(['inbox','mail-view']))
			<div class="sidebar" id="sidebar">
				<div class="sidebar-inner slimscroll">
					<div class="sidebar-menu">
						<ul>
							<li class="{{ Request::is('index') ? 'active' : '' }}">
								<a href="index"><i class="fas fa-home back-icon"></i> Back to Home</a>
							</li>
							<li class="menu-title"><a href="compose" class="btn btn-primary btn-block">Compose</a></li>
							<li class="{{ Request::is('inbox','mail-view') ? 'active' : '' }}">
								<a href="inbox">Inbox <span class="mail-count">(21)</span></a>
							</li>
							<li>
								<a href="#">Starred</a>
							</li>
							<li>
								<a href="#">Sent Mail</a>
							</li>
							<li>
								<a href="#">Trash</a>
							</li>
							<li>
								<a href="#">Draft <span class="mail-count">(8)</span></a>
							</li>
							<li class="menu-title">Label <a href="#" class="add-user-icon"><i class="fas fa-plus"></i></a></li>
							<li>
								<a href="#"><i class="fas fa-circle text-success mail-label"></i> Work</a>
							</li>
							<li>
								<a href="#"><i class="fas fa-circle text-danger mail-label"></i> Office</a>
							</li>
							<li>
								<a href="#"><i class="fas fa-circle text-warning mail-label"></i> Personal</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			@endif