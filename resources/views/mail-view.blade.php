<?php $page="mail-view";?>
@extends('layout.mainlayout')
@section('content')		

<div class="page-wrapper">
				<div class="content">
					<div class="row">
						<div class="col-sm-12">
							<h4 class="page-title">View Message</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="mailview-content">
									<div class="mailview-header">
										<div class="row">
											<div class="col-sm-9">
												<div class="text-ellipsis m-b-10">
													<span class="mail-view-title">HRMS Bootstrap Admin Template</span>
												</div>
											</div>
											<div class="col-sm-3">
												<div class="mail-view-action">
													<div class="btn-group">
														<button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" title="Delete"> <i class="fas fa-trash"></i></button>
														<button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" title="Reply"> <i class="fas fa-reply"></i></button>
														<button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" title="Forward"> <i class="fas fa-share"></i></button>
													</div>
													<button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" title="Print"> <i class="fas fa-print"></i></button>
												</div>
											</div>
										</div>
										<div class="sender-info">
											<div class="sender-img">
												<img width="40" alt="" src="assets/img/user.jpg" class="rounded-circle">
											</div>
											<div class="receiver-details float-left">
												<span class="sender-name">John Doe (johnjoe@example.com)</span>
												<span class="receiver-name">
												to <span>me</span>, <span>Richard</span>, <span>Paul</span>
												</span>
											</div>
											<div class="mail-sent-time">
												<span class="mail-time">18 Sep. 2017 9:42 AM</span>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
									<div class="mailview-inner">
										<p>Hello Richard,</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<p>Thanks,
											<br> John Doe
										</p>
									</div>
								</div>
								<div class="mail-attachments">
									<p><i class="fas fa-paperclip"></i> 2 Attachments - <a href="#">View all</a> | <a href="#">Download all</a></p>
									<ul class="attachments clearfix text-center">
										<li>
											<div class="attach-file"><i class="far fa-file-pdf"></i></div>
											<div class="attach-info">
												<a href="#" class="attach-filename">daily_meeting.pdf</a>
												<div class="attach-fileize"> 842 KB</div>
											</div>
										</li>
										<li>
											<div class="attach-file"><i class="far fa-file-word-o"></i></div>
											<div class="attach-info">
												<a href="#" class="attach-filename">documentation.docx</a>
												<div class="attach-fileize"> 2,305 KB</div>
											</div>
										</li>
										<li>
											<div class="attach-file"><img src="assets/img/placeholder.jpg" alt="Attachment"></div>
											<div class="attach-info">
												<a href="#" class="attach-filename">webdesign.png</a>
												<div class="attach-fileize"> 1.42 MB</div>
											</div>
										</li>
										<li>
											<div class="attach-file"><img src="assets/img/placeholder.jpg" alt="Attachment"></div>
											<div class="attach-info">
												<a href="#" class="attach-filename">webdevelopment.png</a>
												<div class="attach-fileize"> 1.1 MB</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="mailview-footer">
									<div class="row">
										<div class="col-sm-6 left-action">
											<button type="button" class="btn btn-white"><i class="fas fa-reply"></i> Reply</button>
											<button type="button" class="btn btn-white"><i class="fas fa-share"></i> Forward</button>
										</div>
										<div class="col-sm-6 right-action">
											<button type="button" class="btn btn-white"><i class="fas fa-print"></i> Print</button>
											<button type="button" class="btn btn-white"><i class="fas fa-trash"></i> Delete</button>
										</div>
									</div>
								</div>
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

		</div>
@endsection