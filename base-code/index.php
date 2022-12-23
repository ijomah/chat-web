<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<base href="" />
		<title></title>
		

		<meta charset="utf-8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="styles/uikit/plugins/global/plugins.bundle.css?v=<?php echo filemtime('styles/uikit/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="styles/uikit/css/style.bundle.css?v=<?php echo filemtime('styles/uikit/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<!-- our custom styles -->
		<link href="styles/main.css?v=<?php echo filemtime("styles/main.css"); ?>" rel="stylesheet" type="text/css" />
		<link href="styles/raw-main.css?v=<?php echo filemtime("styles/raw-main.css"); ?>" rel="stylesheet" type="text/css" />
		<!-- our custom styles end-->
		<!-- for jquery code  -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script type="text/javascript" src="ckeditor/ckeditor.js"></script> -->
		<!-- <script type="text/javascript" src="ckeditor/adapters/jquery.js"></script> -->
		<script>
			// $(document).ready(function() {
			// 	$('.chat_editor').ckeditor();
			// 	console.log("DOM ready")
				
			// })
			
		</script>
		<!-- <script src="//cdn.ckeditor.com/4.20.1/basic/ckeditor.js"></script> -->
		<!-- for js code editor -->
		<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>	
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<div id="app_container">
			<!-- Begin::your code -->
			<div class="container m-5">
				
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner">
						<!-- <div class="carousel-item active">
						<img src="..." class="d-block w-100" alt="...">
						</div> -->

						<!-- modal -->
						<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_1">
							Launch demo modal
						</button>

						<div class="modal fade" tabindex="-1" id="kt_modal_scrollable_1">
							<div class="modal-dialog m-1">
								<div class="modal-content">
									<div class="modal-header p-0 d-flex flex-row">
										<div class="modal-title w-100 m-2 border-5 background-color: rgba(0,0,255,.1)"><b>Preview</b>
											<div class="d-inline">	
												<a href="#" class="btn btn-icon btn-light pulse pulse-success">
													<span class="svg-icon svg-icon-1"><svg>...</svg></span>
													<span class="pulse-ring"></span>
												</a>
												<span class="badge badge-primary badge-sm">Approved</span>
											</div>
										</div>
										<span></span>
										<div class="modal-title w-100 m-2 border-5 border-primary background-color: rgba(0,0,255,.1)"><b>Activity</b></div>
									</div>
									<div class="modal-body row" style="min-height: 2500px">
										<div class="row">
											<div class="col-md-6 ms-auto rounded bg-success">
												
												<div class="card" style="width: 36.8rem;">
													<!-- carousal -->
													<div class="tns tns-default" style="direction: ltr">
														<!--begin::Slider-->
														<div
														data-tns="true"
														data-tns-loop="true"
														data-tns-swipe-angle="false"
														data-tns-speed="2000"
														data-tns-autoplay="true"
														data-tns-autoplay-timeout="18000"
														data-tns-controls="true"
														data-tns-nav="false"
														data-tns-items="3"
														data-tns-center="false"
														data-tns-dots="false"
														data-tns-prev-button="#kt_team_slider_prev1"
														data-tns-next-button="#kt_team_slider_next1">

															<!--begin::Item-->
															<div class="text-center px-5 py-5">
																<img src="./media/f-book.jpg" class="card-rounded mw-100" alt=""/>
															</div>
															<div class="text-center px-5 py-5">
																<img src="./media/instagram-pix.png" class="card-rounded mw-100" alt=""/>
															</div>
															<div class="text-center px-5 py-5">
																<img src="./media/github-mark.png" class="card-rounded mw-100" alt=""/>
															</div>
															<div class="text-center px-5 py-5">
																<img src="./media/twitter1.jpg" class="card-rounded mw-100" alt=""/>
															</div>
															<!--end::Item-->
															...
														</div>
														<!--end::Slider-->

														<!--begin::Slider button-->
														<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
															<i class="fa-solid fa-chevron-left fs-2 text-dark"></i>
														</button>
														<!--end::Slider button-->

														<!--begin::Slider button-->
														<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
															<i class="fa-solid fa-chevron-right fs-2 text-dark"></i>
														</button>
														<!--end::Slider button-->
													</div>
													
													<img src="./media/pix.jpg" class="card-img-top" alt="Picture of a person carrying basket containing colored brooms">
													<div class="card-body">
														<p class="card-text d-inline">Some quick example text to build on the card title and make up the bulk of the card's content sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
															quis nostrud exercitation ullamco laboris nisi ut.Sed ut perspiciatis unde omnis iste natus error...
															<a class="text-primary d-inline" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">see more</a> 
														</p>
														<div class="collapse" id="collapseExample">
																Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
																Lorem ipsum dolor sit amet, consectetur adipisicing elit,
														</div>

														<hr>
														
														<!--begin::Input group-->
														<div class="form-floating form-control-solid-bg rounded">
															<select class="form-select form-select-transparent" id="kt_docs_select2_floating_labels_2" data-allow-clear="true">
																<option></option>
															</select>
															<label for="floatingInputValue">Select Client</label>
														</div>
														<!--end::Input group-->


														
														<hr>
														<!--begin::Input group-->
														<div class="form-floating border rounded mb-7">
															<select class="form-select form-select-transparent" id="kt_docs_select2_floating_labels_1">
																<option><i class="fa-brands fa-bitcoin"></i></option>
															</select>
															<label>Content Type</label>
														</div>
														<!--end::Input group-->

														<p>Selected Social <i class="fa-solid fa-pen-to-square text-primary"></i></p>
														<div class="tns tns-default" style="direction: ltr">
														<!--begin::Slider-->
														<div
														data-tns="true"
														data-tns-loop="true"
														data-tns-swipe-angle="false"
														data-tns-speed="2000"
														data-tns-autoplay="true"
														data-tns-autoplay-timeout="18000"
														data-tns-controls="true"
														data-tns-nav="false"
														data-tns-items="3"
														data-tns-center="false"
														data-tns-dots="false"
														data-tns-prev-button="#kt_team_slider_prev1"
														data-tns-next-button="#kt_team_slider_next1">

															<!--begin::Item-->
															<div class="text-center px-5 py-5">
																<img src="assets/media/stock/600x400/img-1.jpg" class="card-rounded mw-100" alt=""/>
															</div>
															<!--end::Item-->
															...
														</div>
														<!--end::Slider-->

														<!--begin::Slider button-->
														<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
															<!-- <span class="svg-icon svg-icon-3x">
																...
															</span> --><i class="fa-solid fa-arrow-left"></i>
														</button>
														<!--end::Slider button-->

														<!--begin::Slider button-->
														<button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
															<!-- <span class="svg-icon svg-icon-3x">
																...
															</span> --><i class="fa-solid fa-arrow-right"></i>
														</button>
														<!--end::Slider button-->
													</div>
														<!-- <div class="mb-0 card-header d-flex justify-content-between p-3"> -->
															<b class="form-label">Sheduled For:</b>
															<input class="form-control form-control-solid d-inline w-50 p-0 bg-white border-0" placeholder="Pick date rage" id="kt_daterangepicker_2"/>
															<i class="fa-solid fa-pen-to-square text-primary"></i>
														<!-- </div> -->
														<!-- <div class="card-header d-flex justify-content-between p-3">
																	<p class="fw-bold mb-0">Brad Pitt <span class="badge badge-primary badge-sm">Aproved</span></p>
																	
																	<p class="text-muted small mb-0"><i class="far fa-clock"></i> 12 mins ago</p>
																</div> -->
														<hr>
														<div>
															<p><b>Campaign:</b> <span class="text-primary">This is our Moment!</span></p>
														</div>
													</div>
												</div>								
											</div>

												



											<div class="col-md-6 ms-auto">
												<!-- Chat component -->
												<section style="background-color: #eee;">
													<div class="container py-5">

														<div class="row">	

														<div class="col-md-6 col-lg-7 col-xl-12">
																		<!-- Rich Text editor Starts here-->
															<!-- <div class="row align-items-center justify-content-center">
																<div class="col-md-12 col-lg-12">
																	<div class="editor bg-white" id="editor-1">
																		<div id='editor' class="editorAria bg-white border-0 rounded" contenteditable>
																			<p>Just a normal text editor which can export html</p>
																			
																		</div>
																		
																		<div class="toolbar border-0 rounded d-flex justify-content-between" style="height:4em">	
																		<div class="d-inline">
																				
																				<a href="#" data-command='bold' class="p-0 border-0 bg-transparent" data-toggle="tooltip" data-placement="top" title="Bold"><i class='fa fa-bold'></i></a>
																				<a href="#" data-command='italic' class="p-0 border-0 bg-transparent" data-toggle="tooltip" data-placement="top" title="Italic"><i class='fa fa-italic'></i></a>
																				<a href="#" data-command='underline' class="p-0 border-0 bg-transparent" data-toggle="tooltip" data-placement="top" title="Underline"><i class='fa fa-underline'></i></a>
																				<a href="#" data-command='insertUnorderedList' class="p-0 border-0 bg-transparent"  data-toggle="tooltip" data-placement="top" title="Unordered list"><i class='fa fa-list-ul'></i></a>
																				<a href="#" data-command='insertOrderedList' class="p-0 border-0 bg-transparent" data-toggle="tooltip" data-placement="top" title="Ordered list"><i class='fa fa-list-ol'></i></a>
																				<a href="#" data-command='unlink' data-toggle="tooltip" class="p-0 border-0 bg-transparent" data-placement="top" title="Unlink"><i class='fa fa-unlink'></i></a>
																			</div>
																			<span class="badge badge-warning text-dark badge-sm d-inline pt-2" style="height: 2em">Add Comment</span>
																		</div>
																	</div>
																</div>
															</div> -->
															<!-- Rich Text Editor with chat app with Avatar -->
															<div class="chat">
																<ul class="chat__posts">
																	<li>
																		<img src="https://ckeditor.com/docs/ckeditor5/latest/assets/img/m_1.jpg" alt="avatar" class="photo">
																		<div class="chat__posts__post__message">
																			<strong>Charles Flores</strong>
																			<a class="chat__posts__post__mailto-user" href="mailto:cflores@example.com">@cflores</a>
																			<span class="chat__posts__post__time">2 hours ago</span>
																			<p class="chat__posts__post__content">
																				Thanks for another <a class="mention" data-mention="#yummy" href="https://example.com/social/yummy">#yummy</a> recipe,
																				<a class="mention" data-mention="@dwilliams" href="mailto:dwilliams@example.com">@dwilliams</a>!
																				Makes me <a class="mention" data-mention="#hungry" href="https://example.com/social/hungry">#hungry</a>
																				just looking at the photos 😋. Definitely adding it to my TODO list for our next
																				<a class="mention" data-mention="#mediterranean" href="https://example.com/social/mediterranean">#mediterranean</a> potluck.
																			</p>
																		</div>
																	</li>
																	<li>
																		<img src="https://ckeditor.com/docs/ckeditor5/latest/assets/img/w_1.jpg" alt="avatar" class="photo">
																		<div class="chat__posts__post__message">
																			<strong>Mildred Wilson</strong>
																			<a class="chat__posts__post__mailto-user" href="mailto:mwilson@example.com">@mwilson</a>
																			<span class="chat__posts__post__time">4 hours ago</span>
																			<p class="chat__posts__post__content">
																				Really appreciate the <a class="mention" data-mention="#vegetarian" href="https://example.com/social/vegetarian">#vegetarian</a>
																				and <a class="mention" data-mention="#vegan" href="https://example.com/social/vegan">#vegan</a> variations of your recipes.
																				So thoughtful of you! 🌱
																			</p>
																		</div>
																	</li>
																</ul>
																<div class="chat__editor">
																	<p>
																		I agree with <a href="mailto:mwilson@example.com" class="mention" data-mention="@mwilson">@mwilson</a> 👍.
																		It’s so nice of you to always be providing a few options to try! I love
																		<a href="https://example.com/social/greek" class="mention" data-mention="#greek">#greek</a> cuisine with a modern twist,
																		this one will be perfect to try.
																	</p>
																</div>

																<button class="chat-send" type="button">Send</button>
															</div>
															<!-- Rich Text Editor Ends -->

															<!-- testing now -->
															<!-- <div>
																<ul class="list-unstyled mt-4">
																		<li class="d-flex justify-content-between mb-4" id="listed">
																		<i class="fonticon-user fs-3x text-primary rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60"></i>
																			<!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
																			class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60"> -->
																			<!-- <div id="cardy" class="card">
																				<div id="cardy-header" class="card-header d-flex justify-content-between p-3">
																					<p class="fw-bold mb-0" id="cardy-header-name">Grace Logan <span id="cardy-header-badge" class="badge badge-primary badge-sm">Approved</span></p>
																					
																					<p id="cardy-header-time" class="small mb-0 text-primary"><i id="cardy-header-fontawesome-clock" class="far fa-clock text-primary"></i> 2 hours ago</p>
																				</div>
																				<div class="card-body cardy-body">
																					<p class="mb-0" id="cardy-body-para">
																					Lorem ipsum dolor sit amet, consectetur adipiscing elit
																					</p>
																					<div id="card-input-block" class="d-flex justify-content-between">
																						<input type="text" class="form-control form-control-lg d-inline p-0 w-75 border-0" id="exampleFormControlInput2"
																							placeholder="Reply...">
																						<a id="card-body-input-anchor" class="ms-1 text-muted d-inline pt-5" href="#!"><i id="cardy-body-fontawesome-link" class="fa-solid fa-link"></i></i></a>
																					</div>
																				</div>
																			</div>
																		</li> -->
																		<!-- New chat block -->
																		
																<!-- </ul>
																<div class="form-outline">
																	<textarea class="form-control" id="editor1" rows="2"></textarea>
																</div>
																<button type="button" class="btn btn-info btn-rounded float-end">Send</button>
															</div> -->
															
															
															<!-- My design chat -->
															<div class="chat_case">
																<div class="list-unstyled mt-4">
																		<div class="d-flex justify-content-between mb-4 listed" id="emp">
																			<img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
																			class="rounded-circle d-flex align-self-start me-3 shadow-1-strong chat-avatar" width="60" id="emp1">

																			<div id="cardy" class="card">
																				<div id="emp2" class="card-header d-flex justify-content-between p-3 cardy-header">
																					<p class="fw-bold mb-0 cardy-header-name" id="emp3">Grace Logan <span id="emp4" class="badge badge-primary badge-sm cardy-header-badge">Approved</span></p>
																					
																					<p id="emp5" class="small mb-0 text-primary cardy-header-time"><i id="emp6" class="far fa-clock text-primary cardy-header-fontawesome-clock"></i> 2 hours ago</p>
																				</div>
																				<div class="card-body cardy-body">
																					<p class="mb-0 cardy-body-para" id="emp7">
																					Lorem ipsum dolor sit amet, consectetur adipiscing elit
																					</p>																					
																				</div>
																				
																			</div>
																		</div>
																			<!-- nested reply -->
																			
																				<div class="d-inline-flex justify-content-between listed" id="emp" style="width: 29.8em; margin-left: 70px">
																					<img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
																					class="rounded-circle d-flex align-self-start me-3 shadow-1-strong chat-avatar" width="60" id="emp1">
																					<div id="cardy" class="card">
																						<div id="emp2" class="card-header d-flex justify-content-between p-3 cardy-header">
																							<p class="fw-bold mb-0 cardy-header-name" id="emp3">Grace Logan (re) <span id="emp4" class="badge badge-primary badge-sm cardy-header-badge">Approved</span></p>
																							
																							<p id="emp5" class="small mb-0 text-primary cardy-header-time"><i id="emp6" class="far fa-clock text-primary cardy-header-fontawesome-clock"></i> 2 hours ago</p>
																						</div>
																						<div class="card-body cardy-body">
																							<p class="mb-0 cardy-body-para" id="emp7">
																							Lorem ipsum dolor sit amet, consectetur adipiscing elit
																							</p>																					
																						</div>
																					</div>
																				</div>
																			
																		
																		<!-- New chat block -->
																		
																</div>

																<!-- Reply from respondent -->
																<ul class="mt-4 reply">

																</ul>
																					<!-- nested reply -->
																			<div>
																				<div class="d-flex justify-content-between listed" id="emp" style="width: 29.8em; margin-left: 70px">
																					<img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
																					class="rounded-circle d-flex align-self-start me-3 shadow-1-strong chat-avatar" width="60" id="emp1">
																					<div id="cardy" class="card">
																						<div id="emp2" class="card-header d-flex justify-content-between p-3 cardy-header">
																							<p class="fw-bold mb-0 cardy-header-name" id="emp3">Grace Logan (re) <span id="emp4" class="badge badge-primary badge-sm cardy-header-badge">Approved</span></p>
																							
																							<p id="emp5" class="small mb-0 text-primary cardy-header-time"><i id="emp6" class="far fa-clock text-primary cardy-header-fontawesome-clock"></i> 2 hours ago</p>
																						</div>
																						<div class="card-body cardy-body">
																							<p class="mb-0 cardy-body-para" id="emp7">
																							Lorem ipsum dolor sit amet, consectetur adipiscing elit
																							</p>																					
																						</div>
																					</div>
																				</div>
																			</div>


																<form id="emp13" class="d-flex justify-content-between card-input-block pl-4">
																	<input type="text" class="form-control form-control-lg d-inline p-0 w-75 border-0 exampleFormControlInput" id="emp14"
																							placeholder="Reply...">
																	<a id="card-body-input-anchor" class="ms-1 text-muted d-inline pt-5" href="#!"><i id="cardy-body-fontawesome-link" class="fa-solid fa-link"></i></a>
																		
																</form>
																		
																<!-- <button type="button" class="btn btn-info btn-rounded float-end chat-btn" id="emp15">Send</button> -->
															</div>
															<!-- My design chat Ends-->

															<ul>
																<li class="d-flex justify-content-between mb-4">
																	<i class="fonticon-user fs-3x text-primary"></i>
																	<!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
																	class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60"> -->
																	<div class="card">
																	<div class="card-header d-flex justify-content-between p-3">
																		<p class="fw-bold mb-0">Grace Logan <span class="badge badge-warning badge-sm">Edited Caption</span></p>
																		<p class="small mb-0 text-primary"><i class="far fa-clock text-primary"></i> 3 hours ago</p>
																	</div>


																	<div class="card-body"> 
																			<fieldset class="border border-info px-4 rounded">
																				<legend class="float-none text-info d-inline w-auto px-3 bg-transparent fs-6">Revised Default</legend>
																				<p>Some placeholder content for the collapse component. 
																					This panel is hidden by default but revealed when the user activates the relevant trigger.
																				</p>
																				
																			</fieldset>
																		
																			<fieldset class="border border-warning px-4 rounded">
																				<legend class="float-none text-warning d-inline w-auto px-3 bg-transparent fs-6">Previous Default</legend>
																				<p>Some placeholder content for the collapse component. 
																					This panel is hidden by default but revealed when the user activates the relevant trigger.
																				</p>
																				
																			</fieldset>

																			<fieldset class="border border-info px-4 rounded">
																				<legend class="float-none text-info d-inline w-auto px-3 bg-transparent fs-6">Revised Twitter</legend>
																				<p>Some placeholder content for the collapse component. 
																					This panel is hidden by default but revealed when the user activates the relevant trigger.
																				</p>
																				
																			</fieldset>

																			<fieldset class="border border-warning px-4 rounded">
																				<legend class="float-none text-warning d-inline w-auto px-3 bg-transparent fs-6">Previous Twitter</legend>
																				<p>Some placeholder content for the collapse component. 
																					This panel is hidden by default but revealed when the user activates the relevant trigger.
																				</p>
																				
																			</fieldset>
																		<div>
																			
																		</div>
																		<div class="d-flex justify-content-between">
																			<input type="text" class="form-control form-control-lg d-inline p-0 w-75 border-0" id="exampleFormControlInput2"
																				placeholder="Reply...">
																			<a class="ms-1 text-muted d-inline pt-5" href="#!"><i class="fa-solid fa-link"></i></i></a>
																		</div>
																	</div>
																	</div>
																</li>
														
															
																<li class="d-flex justify-content-between mb-4">
																	<div class="card w-100">
																	<div class="card-header d-flex justify-content-between p-3">
																		<p class="fw-bold mb-0">Makula Francis <span class="badge badge-light badge-sm">Created</span></p>
																		<p class="small mb-0 text-primary"><i class="far fa-clock text-primary"></i> 2 days ago</p>
																	</div>
																	<div class="card-body">
																		<p class="mb-0">
																		
																		</p>
																		<div class="d-flex justify-content-between">
																			<input type="text" class="form-control form-control-lg d-inline p-0 w-75 border-0" id="exampleFormControlInput2"
																				placeholder="Reply...">
																			<a class="ms-1 text-muted d-inline pt-5" href="#!"><i class="fa-solid fa-link"></i></i></a>
																		</div>
																	</div>
																	</div>
																	<i class="fonticon-user fs-3x text-success"></i>
																	<!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar"
																	class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60"> -->
																
																
																</li>
															</ul>

														</div>

														</div>

													</div>
												</section>
												<!-- Chat component ends -->
												
											</div>
										</div>
									</div>
									<!-- <form id="testing">
		<p>
			<label for="fname">First name</label>
			<input type="text" id="fname" name="myname">
		</p>
		<div name="content" class="bg-warning" id="fortesting" contenteditable="true">

		</div>
		<input type="submit" value="Submit">
	</form> -->
									<div class="modal-footer">
										<div>
											<button type="button" class="btn btn-light" data-bs-dismiss="modal">Delete</button>
											<button type="button" class="btn btn-primary">Show</button>
											<button type="button" class="btn btn-light" data-bs-dismiss="modal">UNDO APPROVE</button>
											<button type="button" class="btn btn-primary">Edit</button>
										</div>
										<div class="form-floating" style="width: 35em">
											<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
											<label for="floatingTextarea">Add a Comment...</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>

				<div class="row">
					<div class="column">
						<div class="row">
							<div class="left-head"></div>
							<div class="right-head"></div>
						</div>
					</div>

					<div class="column">
						<div class="row">
							<div class="column left-body"></div>
							<div class="column right-body"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="text-center mt-4 pt-5">
				This page Works
				ffjskjldl
				fksnklkldawkled
				ekdnknklmksd
			</div> -->

			<!-- End::your code -->
		</div>

		<!--begin::Javascript-->
		<script>var hostUrl = "scripts/lib/uikit/";</script>
		<script src="scripts/lib/uikit/plugins/global/plugins.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/plugins/global/plugins.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/scripts.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/scripts.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/widgets.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/widgets.bundle.js') ?>"></script>
	
		<!-- <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="/ckeditor/adapters/jquery.js"></script> -->
		
		<script type="module" src="scripts/lib/custom.js?v=<?php echo filemtime('scripts/lib/custom.js') ?>"></script>
		<script>
			//CKEDITOR.replace( 'editor1' );
		</script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
	
</html>
